<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnouncedStateResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announed_state_results', function (Blueprint $table) {
            $table->id('result_id');
            $table->char('state_name', 50);
            $table->char('party_abbreviation', 4);
            $table->integer('party_score');
            $table->char('entered_by_user', 50);
            $table->dateTime('date_entered');
            $table->char('user_ip_address');
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
        Schema::dropIfExists('announed_state_results');
    }
}
