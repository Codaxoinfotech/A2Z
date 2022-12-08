<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id(); 
            $table->string('name',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('mobile',13)->nullable();
            $table->string('address')->nullabe(); 
            $table->string('password')->nullable();
            $table->integer('role')->default(1)->comment('1:admin,2:Sub Admin');
            $table->string('status',8)->default('Enable')->comment('Enable,Disable');
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
        Schema::dropIfExists('admins');
    }
}
