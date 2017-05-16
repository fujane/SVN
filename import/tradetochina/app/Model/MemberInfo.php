<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class MemberInfo extends Model
{
    protected $table = 'memberinfo';
    protected $fillable = ['registerphone', 'name', 'pwd', 'email', 'idcard'];
    public $timestamps = TRUE;



}
