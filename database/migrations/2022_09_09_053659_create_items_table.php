<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apply_id')->unsigned()->nullable();
            $table->foreign('apply_id')->references('id')->on('apply_services')->onDelete('cascade');
            $table->string('item',100);
            $table->integer('qty');
            $table->double('price',16,2);
            $table->double('total',16,2);
            $table->string('status')->comment('Not Approved,Approved, Cancel');
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
        Schema::dropIfExists('items');
    }
}
