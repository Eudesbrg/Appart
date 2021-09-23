<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->text('description');
            $table->string('image');
            $table->unsignedInteger('nombre_toilet');
            $table->unsignedInteger('nombre_lit');
            $table->decimal('superficie');
            $table->decimal('avance');
            $table->decimal('monthPrice');
            $table->foreignId('category_id')->Constrained('appart_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('quartier_id')->Constrained('quartiers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('appartements');
    }
}
