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
            $table->id();
            $table->string('product_name');
            $table->string('product_id')->nullable();
            $table->foreign("product_id")->references("farm_code")->on("farms")->onUpdate("cascade")->onDelete("set null");
            $table->integer('price');
            $table->string('category')->nullable();
            $table->foreign("category")->references("category_id")->on("categories")->onUpdate("cascade")->onDelete("set null");
            $table->string('farms_code');
            $table->string('location')->nullable();
            $table->foreign("location")->references("farm_location")->on("farms")->onUpdate("cascade")->onDelete("set null");
            $table->string('farmer_code');
            $table->integer('stock');
            $table->integer('total_purchase')->nullable();
            $table->date('last_purchase')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
