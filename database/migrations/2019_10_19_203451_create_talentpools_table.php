<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentpoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talentpools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('email_address');
            $table->string('residence');
            $table->string('phone_number');
            $table->string('current_age');
            $table->string('ability');
            $table->string('educational_background');
            $table->string('work_position');
            $table->string('about_you');
            $table->string('work_experience');
            $table->string('current_activity');
            $table->string('overworked');
            $table->string('choose');
            $table->string('upload_cv');
            $table->string('photo_url');
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
        Schema::dropIfExists('talentpools');
    }
}
