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
        Schema::create('corporate_team', function (Blueprint $table) {
            $table->unsignedBigInteger('corporate_id');
            $table->unsignedBigInteger('team_id');
            $table->primary(['corporate_id', 'team_id']);
        });

        Schema::table('corporate_team', function (Blueprint $table) {
            $table
                ->foreign('corporate_id')
                ->references('id')
                ->on('corporates')
                ->onDelete('cascade')
            ;
            $table
                ->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade')
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corporate_team');
    }
};
