<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
            $table->string('item_name');
            $table->date('purchase_date')->nullable();
            $table->string('purchase_from')->nullable();
            $table->double('price');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('expenses_categories')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade')->onUpdate('cascade');

            $table->string('bill')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');

            $table->unsignedBigInteger('expenses_recurring_id')->nullable()->default(null);
            $table->foreign('expenses_recurring_id')->references('id')->on('expenses_recurring')->onDelete('cascade')->onUpdate('cascade');
            $table->string('created_by')->nullable();
            $table->text('description')->nullable()->default(null);

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
        Schema::dropIfExists('expenses');
    }
}
