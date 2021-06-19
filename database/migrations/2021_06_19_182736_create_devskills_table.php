<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devskill', function (Blueprint $table) {
            $table->id();
            $table->biginteger("dev")->unsigned()
            ->foreign()->references("id")->on("usuarios");
            $table->biginteger("skill")->unsigned()
            ->foreign()->references("id")->on("skills");
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
        Schema::dropIfExists('devskill');
    }
}
