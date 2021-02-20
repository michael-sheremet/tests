<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Users\ImportRequest;
use App\Repositories\CompaniesRepository;
use App\Repositories\UsersRepository;
use App\Services\PreparedImportDataService;

class UserController extends Controller
{
    public function import(ImportRequest $request, PreparedImportDataService $importUserService, UsersRepository $usersRepository, CompaniesRepository $companiesRepository)
    {
        $importUserService->prepareData($request->validated()['users']);
        $usersRepository->updateOrInsert($importUserService->getUsersList());
        $companiesRepository->updateOrInsert($importUserService->getCompaniesList());
        $usersRepository->attachUsersToCompanies($importUserService->getRelations());

        return response()->json([]);
    }

}
