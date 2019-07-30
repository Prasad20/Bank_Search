<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BankIdMig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_info', function (Blueprint $table) {
            $table->integer('id')->nullable(false)->primary()->autoIncrement();
            $table->text('name');
        });

        Schema::create('bank_info', function (Blueprint $table) {
            $table->integer('id');
            $table->foreign('id')->references('id')->on('bank_id');
            $table->text('code',5)->nullable(false);
            $table->text('adr')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_info');
        Schema::dropIfExists('id_info');
    }
}
