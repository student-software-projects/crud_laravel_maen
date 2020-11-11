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
           //campos
            $table->id();
            $table->string('name',75);
            $table->text('descripcion');
            $table->string('price',75);
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('product_types_id')->unsigned();
           //llaves foraneas
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('product_types_id')->references('id')->on('product_types');
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
        Schema::dropIfExists('products');
    }
}
