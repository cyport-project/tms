<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    //
    protected $fillable =
    [
      's_id',
      'lname',
      'lname_j',
      'fname',
      'fname_j',
      'b_date',
      'sex',
      'tell_num',
      'emergency_contact',
      'mail_ad',
      'educational',
      'address',
      'address_2',
      'zip',
      'phone',
      'station',
      'department',
      'expense',
      'employment_category',
      'delete_flag'
    ];


    public static $rules = [
      's_id' => 'required|unique:staff,s_id',
      'lname' => 'required',
      'lname_j' => 'required',
      'fname' => 'required',
      'fname_j' => 'required',
      'b_date' => 'required|date',
      'tell_num' => 'required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',
      'emergency_contact' => 	'required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',
      'mail_ad' => 'required|email',
      'address' => 'required',
      'address_2' => 'required',
      'zip' => 'required|regex:/[0-9]{2}-[0-9]{3}/',
      'phone' => 'required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',
      'station' => 'required',
      'expense' => 'required|integer',
      ];

      public static $rules2 = [
        's_id' => 'required',
        'lname' => 'required',
        'lname_j' => 'required',
        'fname' => 'required',
        'fname_j' => 'required',
        'b_date' => 'required|date',
        'tell_num' => 'required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',
        'emergency_contact' => 	'required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',
        'mail_ad' => 'required|email',
        'address' => 'required',
        'address_2' => 'required',
        'zip' => 'required|regex:/[0-9]{2}-[0-9]{3}/',
        'phone' => 'required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',
        'station' => 'required',
        'expense' => 'required|integer',
        ];
}
