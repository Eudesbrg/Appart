<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartAgrementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appart_agrements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appartement_id')->Constrained('appartements')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('agrement_id')->Constrained('agrements')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appart_agrements');
    }
}
