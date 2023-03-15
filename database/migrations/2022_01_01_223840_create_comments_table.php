<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //$table->unsignedBigInteger('user')->unsigned();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('certif_id')->constrained('certifs')->onDelete('cascade');
            //$table->unsignedBigInteger('certif')->unsigned();
            //$table->foreign('certif')->references('id')->on('certifs')->onDelete('cascade');
            $table->text('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
