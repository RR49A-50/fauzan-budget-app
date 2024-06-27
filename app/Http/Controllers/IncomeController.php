<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use App\Services\IncomeService;
use App\Http\Requests\Income_request;

class IncomeController extends Controller
{
    public function __construct(protected IncomeService $service)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->all()->toArray();
        return $this->response($data, "Sukses menampilkan data");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Income_request $request)
    {
        $payload = $request->validated();
        dd($payload);
        $data = $this->service->create($payload);
        return $this->response($data, "Sukses membuat data");
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = $this->service->show($id);
        return $this->response($data, "Sukses menampilkan data");
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
        return $this->response($data, "Sukses menghapus data");
    }
}
