<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\EquipamentsResource;
use App\Http\Requests\EquipamentsRequest;
use App\Models\equipaments;
use Illuminate\Http\Request;

class EquipamentsController extends Controller
{

    public function index()
    {
        $equipaments = equipaments::all();
        return EquipamentsResource::collection($equipaments);
    }

    public function store(EquipamentsRequest $request)
    {
        $data = $request->validated();
        $equipaments = Equipaments::create($data);
        return new EquipamentsResource($equipaments);
    }

    public function show(string $id)
    {
        $equipaments = equipaments::findOrfail($id);
        return new EquipamentsResource($equipaments);
    }

    public function update(EquipamentsRequest $request, string $id)
    {
        $data = $request->validated();
        $equipaments = equipaments::findOrfail($id);
        $equipaments->update($data);
        return new EquipamentsResource($equipaments);
    }

    public function destroy(string $id)
    {
        $equipaments = equipaments::findOrfail($id);
        $equipaments->delete($id);
        return new EquipamentsResource($equipaments);
    }
}
