<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAgentRoleColumnTicketAgentGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticket_agent_groups', function (Blueprint $table) {
            $table->integer('agent_role')->default(0)->after('agent_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket_agent_groups', function (Blueprint $table) {
            $table->dropColumn('agent_role');
        });
    }
}
