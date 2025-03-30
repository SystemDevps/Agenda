<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('consultand_id')->constrained('users')->onDelete('cascade');
            $table->date('reservation_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('status',['pendiente','confirmada','cancelada'])->default('pendiente'); // pending, confirmed, cancelled
            $table->decimal('total_amount', 8, 2)->nullable(); // Price of the reservation
            $table->enum('payment_status',['pendiente','pagado','fallido'])->default('pendiente'); // Payment method used
            $table->text('cancellation_reason')->nullable(); // Reason for cancellation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
