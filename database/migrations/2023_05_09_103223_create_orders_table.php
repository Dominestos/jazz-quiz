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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('contact_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('preferred_messager');
            $table->string('hearing_about_us');
            $table->date('date');
            $table->integer('count_of_persons');
            $table->tinyInteger('online_or_offline');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_corps');
    }
};
