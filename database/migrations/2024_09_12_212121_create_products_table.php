<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->integer('cost');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the mirations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
