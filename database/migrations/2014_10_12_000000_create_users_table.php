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
            $table->string('client_name');
            $table->string('trn_details');
            $table->string('address');
            $table->integer('mobile')->unique();
            $table->string('whatsaap_no');
            $table->string('email')->unique();
            $table->string('emirate');
            $table->string('country');
            $table->string('trade_license');
            $table->string('vat_period');
            $table->string('vat_percentage');
            $table->string('fta_login');
            $table->string('username');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('label')->unique()->nullable();
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
