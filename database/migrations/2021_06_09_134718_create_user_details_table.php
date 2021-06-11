<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unique();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name_kana')->nullable();
            $table->string('first_name_kana')->nullable();
            $table->date('birth_date')->nullable();
            $table->integer('now_job')->nullable();
            $table->string('tel')->nullable();
            $table->integer('prefectures')->nullable();
            $table->string('nearest_station')->nullable();
            $table->integer('desired_working_status')->nullable();
            $table->time('desired_work_start_time')->nullable();
            $table->time('desired_work_end_time')->nullable();
            $table->integer('important_point')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
