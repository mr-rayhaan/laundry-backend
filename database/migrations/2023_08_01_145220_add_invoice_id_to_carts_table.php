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
        Schema::table('carts', function (Blueprint $table) {
            
            $table->unsignedBigInteger('customer_order_id')->unsigned()->index()->after('id');;
            $table->foreign('customer_order_id')->references('id')->on('customer_orders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign(['customer_order_id']);
            $table->dropColumn('customer_order_id');
        });
    }
};
