<?php


namespace App\Services;


class PreparedImportDataService
{
    protected $relations     = [];
    protected $usersList     = [];
    protected $companiesList = [];

    /**
     * @return array
     */
    public function getCompaniesList(): array
    {
        return $this->companiesList;
    }

    /**
     * @return array
     */
    public function getUsersList(): array
    {
        return $this->usersList;
    }

    /**
     * @return array
     */
    public function getRelations(): array
    {
        return $this->relations;
    }

    public function prepareData($users)
    {
        for ($i = 0; $i < count($users) + $i; $i++) {
            if (!empty($users[$i]['companies'])) {
                $this->companiesList = array_merge($this->companiesList, $users[$i]['companies']);
                $this->companiesIds  = array_column($users[$i]['companies'], 'id');
                foreach ($this->companiesIds as $companyId) {
                    $this->relations[] = ['user_id' => $users[$i]['id'], 'company_id' => $companyId];
                }
            }
            unset($users[$i]['companies']);
            $this->usersList[] = $users[$i];
            unset($users[$i]);
        }
    }

}
