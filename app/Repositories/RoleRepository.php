<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository extends BaseRepository
{
    public function __construct(Role $model)
    {
        parent::__construct($model);
    }

    public function getByUsername(string $username)
    {
        $data = $this->model->where("username", $username)->first();
        return $data;
    }

    public function all() {
        return $this->model->all();
    }
}
