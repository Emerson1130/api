<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContractsRequest;
use App\Http\Resources\ContractsResource;
use App\Models\contracts;


class ContractsController extends Controller
{

    public function index()
    {
        $contracts = Contracts::all();
        return ContractsResource::collection($contracts);
    }

    public function store(ContractsRequest $request)
    {
        $data = $request->validated();

        $contracts = contracts::create($data);

        return new ContractsResource($contracts);
    }

    public function show(string $id)
    {
        $contracts = contracts::findOrfail($id);
        return new ContractsResource($contracts);
    }

    public function update(ContractsRequest $request, string $id)
    {
        $data = $request->validated();
        $contracts = Contracts::findOrfail($id);
        $contracts->update($data);

        return new ContractsResource($contracts);
    }

    public function destroy(string $id)
    {
        $contracts = Contracts::findOrfail($id);
        $contracts->delete();
        return response()->json(['data' => $contracts, 'message' => 'Sucesso!!!']);
    }
}
