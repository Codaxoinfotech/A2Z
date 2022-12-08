<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_services', function (Blueprint $table) {
            $table->id();
            $table->string('apply_no',20);
            $table->text('reason');
            $table->string('lat',30)->nullable();
            $table->string('long',30)->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('cascade');
            $table->bigInteger('sub_category_id')->unsigned()->nullable();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')
            ->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->bigInteger('emp_id')->unsigned()->nullable();
            $table->foreign('emp_id')->references('id')->on('employees')
            ->onDelete('cascade');
            $table->string('status')->comment('Apply,Payment, Assign, Proccess, 
            Pending,Complete')->nullable();
            $table->date('apply_date');
            $table->time('apply_time');
            $table->date('assign_date')->nullable();
            $table->time('assign_time')->nullable();
            $table->date('proccess_date')->nullable();
            $table->time('proccess_time')->nullable();
            $table->date('pending_date')->nullable();
            $table->time('pending_time')->nullable();
            $table->date('work_finish_date')->nullable();
            $table->time('work_finish_time')->nullable();
            $table->date('finish_date')->nullable();
            $table->time('finish_time')->nullable();
            $table->string('review')->nullable()->nullable();
            $table->integer('rating')->nullable()->nullable();
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
        Schema::dropIfExists('apply_services');
    }
}
