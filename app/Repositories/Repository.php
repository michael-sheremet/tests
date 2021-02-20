<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

abstract class Repository
{
    abstract protected function getEmptyObject(): Model;

    public function updateOrInsert($data)
    {
        return DB::table($this->getEmptyObject()->getTable())->upsert($data,'id');
    }
}
