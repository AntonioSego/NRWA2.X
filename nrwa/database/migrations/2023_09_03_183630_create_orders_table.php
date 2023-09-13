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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('order_date');
            $table->string('client_name');
            $table->string('client_contact');
            $table->string('product_name');
            $table->integer('noOfProducts');
            $table->string('sub_total');
            $table->string('vat');
            $table->string('discount');
            $table->string('total_amount');
            $table->string('paid');
            $table->string('due');
            $table->string('payment_type');
            $table->string('payment_status');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
