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
            $table->string('job_service');//type_loker
            $table->string('job_company_name');//company_name
            $table->string('job_company_tagline');//company_tagline
            $table->text('job_company_description');//description_company
            $table->text('job_company_address');//company_address
            $table->string('job_company_website');//company_website
            $table->string('job_company_email');//company_email
            $table->string('job_company_phone');//company_phone
            $table->string('job_position_sought');//position_sought
            $table->string('job_type');//type_work
            $table->text('job_description');//description_job
            $table->string('job_recruit_process');//recruit_process
            $table->string('job_logo_url')->nullable();//logo_url
            $table->string('job_poster_url')->nullable();//upload_poster
            $table->string('job_transfer_url');//evidence_transfer
            $table->smallInteger('job_verified')->default(0);//verified_job
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
