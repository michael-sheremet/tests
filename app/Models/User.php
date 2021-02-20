<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    const COMPANY_RELATION_TABLE = 'user_to_company';
    protected $hidden = ['pivot'];
    protected $casts  = ['id' => 'string'];

    public function companies()
    {
        return $this->belongsToMany('App\Models\Company', self::COMPANY_RELATION_TABLE);
    }
}
