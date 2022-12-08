<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_SN',20)->nullable();
            $table->string('name',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('mobile',13)->nullable();
            $table->string('address')->nullable();
            $table->string('password')->nullable();
            $table->integer('package_id')->nullable();
            $table->string('status',20)->comment('Apply,Assign Task, Proccess, 
            Pending,Work Complete, Finish with Payment')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
