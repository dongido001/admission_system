<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'application';

    protected $fillable = ['name', 'user_id', 'jamb_reg', 'jamb_score', 'course', 'state', 'local_government', 'nationality', 'country_of_residence', 'dob', 'gender', 'mobile', 'email', 'cert', 'subject1', 'grade1', 'subject2', 'grade2', 'subject3', 'grade3', 'subject4', 'grade4', 'subject5', 'grade5', 'subject6', 'grade6', 'subject7', 'grade7'];
}
