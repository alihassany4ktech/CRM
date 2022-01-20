<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('auth_id')->nullable();
            $table->integer('agent_id')->nullable()->default(null);
            $table->integer('source_id')->nullable()->default(null);
            $table->integer('category_id')->nullable()->default(null);
            $table->integer('status_id')->nullable()->default(null);
            $table->string('status')->default('pending');
            $table->string('company_name');
            $table->string('website');
            $table->text('address');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('cell');
            $table->string('office');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postal_code');
            $table->string('next_follow_up');
            $table->string('value');
            $table->text('note');
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
        Schema::dropIfExists('leads');
    }
}
