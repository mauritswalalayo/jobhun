<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_loker');
            $table->string('type_work');
            $table->string('position_sought');
            $table->string('recruit_process');
            $table->text('description_job');
            $table->string('office_name');
            $table->string('office_phone');
            $table->text('office_address');
            $table->string('office_website');
            $table->string('logo_url');
            $table->string('payment_url');
            $table->string('status');
            $table->integer('verified_by');
            $table->string('verified_at');
            $table->integer('user_id');
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
        Schema::dropIfExists('jobs');
    }
}
