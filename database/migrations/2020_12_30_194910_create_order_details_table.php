<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_id')->unique();
            $table->string('user_code');
            $table->foreign("user_code")->references("organisation_code")->on("users")->onUpdate("cascade")->onDelete("set null");
            $table->date('purchase_date');
            $table->string('productIds');
            $table->foreign("productIds")->references("product_id")->on("products")->onUpdate("cascade")->onDelete("set null");
            $table->string('quanitity');
            $table->string('farming_code');
            $table->foreign("farming_code")->references("farm_code")->on("farms")->onUpdate("cascade")->onDelete("set null");
            $table->string('farmer_code')->nullable();
            $table->string('delivery_method');
            $table->string('delivery_add_code');
            $table->string('delivery_address');
            $table->string('when_needed');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
