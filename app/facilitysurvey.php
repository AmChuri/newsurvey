<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facilitysurvey extends Model
{

protected $table = 'facilitysurveys';

        protected $fillable = [
        'name', 'email','empno','location','department','state','question1','remark1','question2','remark2','question3','remark3','question4','remark4','question5','remark5','question6','remark6','question7','remark7','question8','remark8','question9','remark9','question10','remark10','suggestion1','suggestion2','suggestion3'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token'
    ];
}
