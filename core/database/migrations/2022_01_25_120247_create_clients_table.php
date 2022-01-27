<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->uniqid()->nullable();
            $table->string('address');
            $table->string('service');
            $table->text('note')->nullable();
            $table->string('photo')->nullable();
            $table->string('file1')->nullable();
            $table->string('file2')->nullable();
            $table->string('file3')->nullable();
            $table->string('file4')->nullable();
            $table->string('file5')->nullable();
            $table->string('file6')->nullable();
            $table->string('file7')->nullable();
            $table->string('file8')->nullable();
            $table->string('file9')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
