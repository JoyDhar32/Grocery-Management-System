<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('firstname');
            $table->bigInteger('lastname');
            $table->bigInteger('mobile');
            $table->bigInteger('email');
            $table->bigInteger('line1');
            $table->bigInteger('line2')->nullable();
            $table->bigInteger('city');
            $table->bigInteger('state');
            $table->bigInteger('zipcode');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};
