<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clearance extends Model
{
    //

    protected $fillable = [

        'user_id',
        'utme_slip',
        'unn_screening_acknowledge',
        'birth_certificate',
        'advert',
        'student_personal_information',
        'fees_receipt',
        'letter_of_attestation',
        'local_government_identification_cert',
        'admission_list',
        'o_level_cert',

    ];



}
