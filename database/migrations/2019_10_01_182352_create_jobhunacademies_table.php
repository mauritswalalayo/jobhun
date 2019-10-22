<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobhunacademiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobhunacademies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('class_name');
            $table->string('email_address');
            $table->string('phone');
            $table->string('evidence_transfer');
            $table->string('payment_status');
            $table->string('information');

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
        Schema::dropIfExists('jobhunacademies');
    }
}
