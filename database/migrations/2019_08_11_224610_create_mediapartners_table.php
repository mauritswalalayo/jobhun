<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediapartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediapartners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_mediapartner');
            $table->string('event_name');
            $table->string('event_organizer');
            $table->string('contact_event');
            $table->string('event_date');
            $table->string('event_venue');
            $table->string('event_details');
            
            $table->string('evidence_transfer');
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
        Schema::dropIfExists('mediapartners');
    }
}
