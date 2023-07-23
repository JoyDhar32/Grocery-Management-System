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
        Schema::create('completecheckouts', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('userid');
            $table->string('user_email');
            $table->string('fname');
            $table->string('lname');
            $table->text('products');
            $table->string('qty');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->float('subtotal');
            $table->float('tax');
            $table->float('total');
            $table->boolean('status')->default(0);
            $table->string('payment_option');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completecheckouts');
    }
};
