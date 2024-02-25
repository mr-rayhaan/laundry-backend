<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_orders', function (Blueprint $table) {
            $table->id();
            // $table->string('invoice_id')->required();

            $table->enum('status', ['RECEIVED', 'PROCESSING', 'READY', 'DELIVERED'])->comment('RECEIVED:0 , PROCESSING:1, READY:2 , DELIVERED:3')->default('RECEIVED');

            // $table->enum('status', ['received', 'processing', 'ready', 'delivered'])->default('received');

            $table->unsignedBigInteger('customer_id')->unsigned()->index()->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
          
            // $table->unsignedBigInteger('cart_id')->unsigned()->index();
            // $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
      
            $table->unsignedSmallInteger('total_quantity')->default(0);
            $table->float('discount')->default(0);
            $table->float('vat')->default(0);
            $table->float('total_amount')->default(0); 
            $table->float('amount_paid')->default(0);
            $table->float('amount_pending')->default(0);

            $table->string('comments')->nullable();

            $table->unsignedBigInteger('employee_id')->unsigned()->index()->nullable();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

            $table->dateTime('delivery_date')->default(now()->addDay());
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_orders');
    }
};
