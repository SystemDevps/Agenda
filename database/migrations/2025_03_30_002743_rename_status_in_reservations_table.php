<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("ALTER TABLE reservations CHANGE status reservation_status ENUM('pendiente', 'confirmada', 'cancelada') NOT NULL DEFAULT 'pendiente'");
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {

        DB::statement("ALTER TABLE reservations CHANGE reservation_status status ENUM('pendiente', 'confirmada', 'cancelada') NOT NULL DEFAULT 'pendiente'");
    }
};
