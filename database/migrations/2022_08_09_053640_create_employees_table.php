<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_SN',20)->nullable();
            $table->string('name',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('mobile',13)->nullable();
            $table->string('mobile2',13)->nullable();
            $table->string('photo')->nullabe();
            $table->string('photo_path')->nullabe();
            $table->string('password')->nullable();
            $table->string('address')->nullabe();
            $table->string('status',8)->default('Enable')->comment('Enable,Disable');
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
