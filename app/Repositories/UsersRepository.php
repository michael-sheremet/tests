<?php


namespace App\Repositories;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersRepository extends Repository
{
    protected function getEmptyObject(): Model
    {
        return new User;
    }

    public function attachUsersToCompanies($data){
        return DB::table(User::COMPANY_RELATION_TABLE)->insertOrIgnore($data);
    }
}
