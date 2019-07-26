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
            $table->string('company_name');
            $table->string('company_tagline');
            $table->text('description_company');
            $table->text('company_address');
            $table->string('company_website');
            $table->string('company_email');
            $table->string('company_phone');
            $table->string('position_sought');
            $table->string('type_work');
            $table->text('description_job');
            $table->string('recruit_process');
            $table->string('logo_url');
            $table->string('upload_poster');
            $table->string('evidence_transfer');

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
