<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id');
            $table->text('subject');
            $table->text('message');
            $table->unsignedBigInteger('reply_id')->nullable();
            $table->text('reply')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->integer('flag')->comment('1 = seen, 0 = notseen, 2 = updated');
            $table->integer('status')->comment('1 = active, 0 = inactive');
            $table->timestamps();

            $table->foreign('sender_id')->references('id')->on('admin_users')->onDelete('cascade');
            $table->foreign('reply_id')->references('id')->on('admin_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
