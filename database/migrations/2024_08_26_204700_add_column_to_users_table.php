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
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable()->after('name');
            $table->string('username')->unique()->after('surname');
            $table->string('company')->nullable()->after('username');
            $table->string('website')->nullable()->after('company');
            $table->text('address')->nullable()->after('website');
            $table->text('phone')->nullable()->after('email');
            $table->enum('role', ['developer', 'candidate', 'company'])->default('candidate')->after('phone');
            $table->string('avatar')->nullable()->after('role');
            $table->boolean('is_active')->default('0')->after('password');
            $table->boolean('is_blocked')->default('0')->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
