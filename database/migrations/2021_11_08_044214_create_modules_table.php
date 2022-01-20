<?php

use App\Module;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('module_name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Module::insert([
            ['module_name' => 'Clients', 'description' => ''],
            ['module_name' => 'Employees', 'description' => ''],
            ['module_name' => 'Projects', 'description' => 'User can view the basic details of projects assigned to him even without any permission.']
            // ['module_name' => 'attendance', 'description' => __('modules.permission.attendanceNote')],
            // ['module_name' => 'tasks', 'description' => __('modules.permission.taskNote')],
            // ['module_name' => 'estimates', 'description' => ''],
            // ['module_name' => 'invoices', 'description' => ''],
            // ['module_name' => 'payments', 'description' => ''],
            // ['module_name' => 'timelogs', 'description' => ''],
            // ['module_name' => 'tickets', 'description' => __('modules.permission.ticketNote')],
            // ['module_name' => 'events', 'description' => __('modules.permission.eventNote')],
            // ['module_name' => 'notice board', 'description' => ''],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
