<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $guard = 'member';

    protected $guarded=[];

    public function events() {
        return $this->belongsToMany(Event::class);
    }

    public function memberType()
    {
        return $this->hasOne(MemberType::class,'id','member_type_id');
    }
}
