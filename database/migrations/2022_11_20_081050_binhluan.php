<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('binh_luan',function (Blueprint $table){
            $table->string('noidung')->nullable();
            $table->integer('baiviet_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('TenTK')->nullable();
            $table->integer('parent_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
