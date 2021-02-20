<?php


namespace App\Repositories;


use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CompaniesRepository extends Repository
{
    protected function getEmptyObject(): Model
    {
        return new Company();
    }

    public function getWithUser()
    {

    }
}
