<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('categories_id');
            $table->string('ten');
            $table->string('anh');
            $table->double('gia_sp')->default(0);
            $table->integer('so_luong');
            $table->string('kich_thuoc');
            $table->string('trong_luong');
            $table->string('mau_sac');
            $table->string('am_thanh');
            $table->string('bo_nho');
            $table->string('OS');
            $table->string('camera');
            $table->string('pin');
            $table->string('ket_noi');
            $table->timestamps();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
