<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBascketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basckets', function (Blueprint $table) {
            $table->id();
			$table->foreign('user_name')->references('user_name')->on('users');
            $table->foreign('product_name')->references('product_name')->on('prodacts');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basckets');
    }
}
