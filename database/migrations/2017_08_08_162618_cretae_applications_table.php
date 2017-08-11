<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretaeApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name', 120);
            $table->char('jamb_reg', 50);
            $table->integer('jamb_score');
            $table->string('course', 100);
            $table->string('state', 100);
            $table->string('local_government', 100);
            $table->string('nationality', 100);
            $table->string('country_of_residence', 100);
            $table->date('dob');
            $table->char('gender', 10);
            $table->string('mobile',100);
            $table->string('email', 100);
            $table->string('cert', 100);
            $table->string('subject1', 50);
            $table->string('grade1', 50);
            $table->string('subject2', 50);
            $table->string('grade2', 50);
            $table->string('subject3', 50);
            $table->string('grade3', 50);
            $table->string('subject4', 50);
            $table->string('grade4', 50);
            $table->string('subject5', 50);
            $table->string('grade5', 50);
            $table->string('subject6', 50);
            $table->string('grade6', 50);
            $table->string('subject7', 50);
            $table->string('grade7', 50);
            $table->boolean('admitted')->default(0);
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
        Schema::dropIfExists('application');
    }
}
