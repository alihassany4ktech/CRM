<?php

use App\TicketChannel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_channels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('auth_id')->nullable();
            $table->string('channel_name')->unique();
            $table->timestamps();
        });

        $channel = new TicketChannel();
        $channel->auth_id = 1;
        $channel->channel_name = 'Email';
        $channel->save();

        $channel = new TicketChannel();
        $channel->auth_id = 1;
        $channel->channel_name = 'Phone';
        $channel->save();

        $channel = new TicketChannel();
        $channel->auth_id = 1;
        $channel->channel_name = 'Twitter';
        $channel->save();

        $channel = new TicketChannel();
        $channel->auth_id = 1;
        $channel->channel_name = 'Facebook';
        $channel->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_channels');
    }
}
