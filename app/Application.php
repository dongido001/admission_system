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

    protected $fillable = ['name', 'jamb_reg', 'jamb_score', 'course', 'state', 'local_government', 'nationality', 'country_of_residence', 'dob', 'gender', 'mobile', 'email', 'cert'];
}
