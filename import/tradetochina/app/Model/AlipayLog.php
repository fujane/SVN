<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AlipayLog extends Model
{
    //
    protected $table = 'alipaylog';
    protected $fillable = ['memberid', 'money', 'paytype', 'remarks'];
    public $timestamps = TRUE;
}
