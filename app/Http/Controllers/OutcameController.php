<?php

namespace App\Http\Controllers;

use App\Models\Outcame;
use Illuminate\Http\Request;
use App\Services\OutcameService;

class OutcameController extends Controller
{
    public function __construct(protected OutcameService $service)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->all();
        return $this->response($data, "Sukses menampilkan data");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        $data = $this->service->create($payload);
        return $this->response($data, 'Sukses tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = $this->service->show($id);
        return $this->response($data, 'Sukses menampilkan data');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Outcame $outcame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $data = $this->service->delete($id);
        return $this->response($data, 'Sukses menghapus data');
    }
}
