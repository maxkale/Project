<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('Users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mobile_number', 20);
            $table->string('email', 55);
            $table->string('password', 100);
            $table->string('remember_token', 100)->nullable();
            $table->string('first_name', 55);
            $table->string('last_name', 55);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('Users');
    }

}
