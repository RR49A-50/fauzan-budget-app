<?php

namespace App\Repositories;

use App\Models\Outcame;

class OutcameRepository extends BaseRepository
{
    public function __construct(Outcame $model)
    {
        parent::__construct($model);
    }

    public function all()
    {
        return $this->model->all();
    }
}
