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
        Schema::create('order_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('order_number')->nullable()->default('')->comment('訂單編號');
            $table->string('name')->nullable()->default('')->comment('收件者姓名');
            $table->string('address')->nullable()->default('')->comment('收件者地址');
            $table->date('date')->nullable()->default()->comment('日期');
            $table->integer('tel_number')->nullable()->default()->comment('收件者電話');
            $table->text('ps')->nullable()->comment('備註');
            $table->integer('total_price')->nullable()->default(1)->comment('總金額');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_lists');
    }
};
