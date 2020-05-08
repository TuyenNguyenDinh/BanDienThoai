<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('customers_id');
            $table->date('ngaylap_hd');
            $table->string('noi_nhan_hang');
            $table->double('tong_tien')->default(0);
            $table->string('ghi_chu');
            $table->unsignedBigInteger('employees_id');
            $table->timestamps();
            $table->foreign('customers_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('employees_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
