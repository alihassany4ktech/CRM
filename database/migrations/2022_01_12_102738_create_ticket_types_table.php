<?php

use App\TicketType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('auth_id')->nullable();
            $table->string('type')->unique();
            $table->timestamps();
        });

        $type = new TicketType();
        $type->auth_id = 1;
        $type->type = 'Question';
        $type->save();

        $type = new TicketType();
        $type->auth_id = 1;
        $type->type = 'Problem';
        $type->save();

        $type = new TicketType();
        $type->auth_id = 1;
        $type->type = 'Incident';
        $type->save();

        $type = new TicketType();
        $type->auth_id = 1;
        $type->type = 'Feature Request';
        $type->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_types');
    }
}
