<?php

use App\TicketGroup;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('auth_id')->nullable();
            $table->string('group_name');
            $table->timestamps();
        });

        $group = new TicketGroup();
        $group->auth_id = 1;
        $group->group_name = 'Sales';
        $group->save();

        $group = new TicketGroup();
        $group->auth_id = 1;
        $group->group_name = 'Code';
        $group->save();

        $group = new TicketGroup();
        $group->auth_id = 1;
        $group->group_name = 'Management';
        $group->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_groups');
    }
}
