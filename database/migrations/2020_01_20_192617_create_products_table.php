<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('quantity');
            $table->string("name");
            $table->string("description")->nullable();
            $table->integer('sub_category_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references("id")->on("users")
            ->oncascade("delete");
            
            $table->foreign('sub_category_id')->references("id")->on("sub_categories")
            ->oncascade("delete");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
