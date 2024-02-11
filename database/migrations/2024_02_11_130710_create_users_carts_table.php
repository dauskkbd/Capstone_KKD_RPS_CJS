<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_carts', function (Blueprint $table) {
            $table->integer('uc_id', true);
            $table->integer('product_id');
            $table->integer('quantity');
            $table->integer('user_id');
            $table->integer('order_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_carts');
    }
};
