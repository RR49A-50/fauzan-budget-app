<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Services\RoleService;

class RoleController extends Controller
{
    public function __construct(protected RoleService $service)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->all();
        return $this->response($data, "Sukses menampilkan role");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        $data = $this->service->create($payload);
        return $this->response($data, "Sukses membuat role");
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = $this->service->show($id);
        return $this->response($data, "Sukses menampilkan role");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $data = $this->service->delete($id);
        return $this->response($data, "Sukses menghapus role");
    }
}
