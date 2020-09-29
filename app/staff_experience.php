<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff_experience extends Model
{
    //テーブル名の宣言
    protected $table='staff_experience';
    protected $fillable =
    [
      's_id',
      'pro_id',
      'start_period',
      'end_period',
      'industry',
      'pro_name',
      'pro_content',
      'content',
      'mod_os',
      'db_dc',
      'lang_tool',
      'rd_p',
      'bd_p',
      'dd_p',
      'pg_p',
      'el_p',
      'mt_p',
      'op_p',
      'delete_flag',
    ];

    public static $rules = [
      //'s_id'=> 'required|unique:staff,s_id',
      'start_period'=> 'required',
      'industry'=> 'required',
      'pro_name'=> 'required',
      'pro_content'=> 'required',
      'content'=> 'required',
      'mod_os'=> 'required',
      'db_dc'=> 'required',
      'lang_tool'=> 'required',
      ];
}
