<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table){

            $table->id();

            $table->string('title', 150);
            $table->text('description');
            $table->string('thumb');
            $table->decimal('price', 5, 2)->unsigned();
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type', 150);
            $table->string('slug', 150);

            $table->timestamp('comics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
