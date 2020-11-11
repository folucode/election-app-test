<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollingUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polling_units', function (Blueprint $table) {
            $table->id('uniqueid');
            $table->integer('polling_unit_id');
            $table->integer('ward_id');
            $table->integer('lga_id');
            $table->integer('uniquewardid');
            $table->char('polling_unit_number', 50);
            $table->char('polling_unit_name', 50);
            $table->text('polling_unit_description');
            $table->char('lat', 255);
            $table->char('long', 255);
            $table->char('entered_by_user', 50)->nullable();
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
        Schema::dropIfExists('polling_units');
    }
}
