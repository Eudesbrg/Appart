<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appartement_id')->constrained('appartements')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('agent_id')->constrained('agents')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('state_id')->constrained('states')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date_entrer')->nullable();
            $table->string('contrat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
