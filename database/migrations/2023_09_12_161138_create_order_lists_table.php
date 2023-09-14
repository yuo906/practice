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
            $table->string('order_id')->nullable()->default('')->comment('訂單編號');
            $table->bigInteger('user_id')->nullable()->comment('使用者ID');
            $table->string('name')->nullable()->default('')->comment('收件者姓名');
            $table->text('address')->nullable()->comment('收件者地址');
            $table->date('date')->nullable()->comment('日期');
            $table->string('tel_number')->nullable()->comment('收件者電話');
            $table->text('ps')->nullable()->comment('備註');
            $table->integer('total_price')->nullable()->default()->comment('總金額');
            $table->tinyInteger('pay')->nullable()->default('1')->comment('1:臨櫃匯款/2:線上付款');
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
