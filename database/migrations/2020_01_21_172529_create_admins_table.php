<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('position')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('fb_account')->nullable();
            $table->string('twitter_account')->nullable();
            $table->string('youtube_account')->nullable();
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
