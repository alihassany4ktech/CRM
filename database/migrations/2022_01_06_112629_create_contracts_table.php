<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('subject')->nullable();
            $table->date('start_date')->nullable;
            $table->date('orignal_start_date')->nullable;
            $table->date('end_date')->nullable();
            $table->date('orignal_end_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('original_amount')->nullable();
            $table->string('contract_name')->nullable();
            $table->text('alternate_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('cell')->nullable();
            $table->string('office_number')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('note')->nullable();
            $table->string('signature')->nullable();
            $table->string('company_logo')->nullable();

            $table->integer('contract_type_id')->unsigned();
            $table->foreign('contract_type_id')->references('id')->on('contract_types')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('contracts');
    }
}
