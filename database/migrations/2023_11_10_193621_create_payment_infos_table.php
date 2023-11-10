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
        Schema::create('payment_infos', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('email_sender');
            $table->string('subject');
            $table->string('mail_str');
            $table->string('amount');
            $table->string('currency');
            $table->string('iban');
            $table->string('variable_symbol');
            $table->string('dueDate');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_infos');
    }
};
