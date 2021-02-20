<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $casts  = ['id' => 'string'];
    protected $hidden = ['pivot'];

    public function users()
    {
        return $this->belongsToMany('App\Models\User', User::COMPANY_RELATION_TABLE);
    }

}
