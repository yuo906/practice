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
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('order_list_id')->nullable()->comment('訂單編號');
            $table->string('img_path')->nullable()->default('')->comment('圖片路徑');
            $table->string('name')->nullable()->default('')->comment('產品名稱');
            $table->integer('price')->nullable()->default(0)->comment('價格');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
