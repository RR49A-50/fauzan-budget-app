<?php

namespace App\Services;

use App\Repositories\RoleRepository;

class RoleService
{
    public function __construct(protected RoleRepository $repository)
    {

    }

    public function getByUsername(string $username)
    {
        return $this->repository->getByUsername($username);
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function create (array $payload)
    {
        return $this->repository->create($payload);
    }

    public function show (int $id)
    {
        return $this->repository->show($id);
    }


    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
}
