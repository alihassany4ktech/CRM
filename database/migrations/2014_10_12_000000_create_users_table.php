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
            // common feilds
            $table->id();
            $table->string('provider_id')->nullable();
            $table->string('provider_name')->nullable();
            $table->string('login')->default('Enable');
            $table->string('status')->nullable();
            $table->string('name');
            $table->string('type');
            $table->string('image')->default('assets/images/userPic.png');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('notification_status')->default('no');
            $table->string('address')->nullable();
            // client feild 
            $table->string('company')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('website_url')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('skyp_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->text('note')->nullable();
            // employee feild
            $table->string('employee_id')->unique();
            $table->integer('designation_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('slack_username')->nullable();
            $table->date('joining_date')->nullable();
            $table->date('exit_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('skills')->nullable();
            // common feilds
            $table->string('password');
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
