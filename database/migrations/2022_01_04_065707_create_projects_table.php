<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('auth_id')->nullable();
            $table->string('project_name');
            $table->string('project_status')->nullable();
            $table->date('start_date');
            $table->date('deadline')->nullable();
            $table->string('department')->nullable();
            $table->longText('notes')->nullable();
            $table->mediumText('project_summary')->nullable();
            $table->mediumText('feedback')->nullable();

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('project_categories')->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('completion_percent')->default(0);
            $table->boolean('calculate_task_progress')->default(true);
            $table->string('task_notification')->nullable();
            $table->string('project_budget')->nullable();
            $table->string('currency_id')->nullable();
            $table->string('hours_allocated')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
