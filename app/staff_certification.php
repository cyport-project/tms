<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Validator;

class staff_certification extends Model
{
    //
    protected $table='staff_certification';
    protected $primarykey = ['s_id','certification_id'];

    protected $fillable =
    [
      's_id',
      'certification_id',
      'certification_date',
      'notices',
      'delete_flag',
    ];
    public static $rules = [
      's_id' => 'required',
      'certification_id'=>'required',
      'certification_date' => 'required|date',
    ];


}
