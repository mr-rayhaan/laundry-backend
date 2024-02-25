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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cloth_id')->unsigned()->index();
            $table->foreign('cloth_id')->references('id')->on('cloths')->onDelete('cascade');

            $table->unsignedBigInteger('service_id')->unsigned()->index();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');

            $table->unsignedTinyInteger('rate')->required();

            $table->unsignedSmallInteger('quantity')->required();

            $table->unsignedSmallInteger('total')->required();

            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
