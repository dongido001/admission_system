<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clearances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('utme_slip');
            $table->integer('user_id');
            $table->string('unn_screening_acknowledge');
            $table->string('birth_certificate');
            $table->string('advert');
            $table->string('student_personal_information');
            $table->string('fees_receipt');
            $table->string('letter_of_attestation');
            $table->string('local_government_identification_cert');
            $table->string('o_level_cert');
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
        Schema::dropIfExists('clearances');
    }
}
