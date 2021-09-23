<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartAutorisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::disableForeignKeyConstraints();
        Schema::create('appart_autorisations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appartement_id')->constrained('appartements')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('autorisation_id')->constrained('autorisations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appart_autorisations');
    }
}
