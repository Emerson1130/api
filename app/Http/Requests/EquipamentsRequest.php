<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipamentsRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return match ($this->method()) {
            'POST' => $this->store(),
            'PUT' => $this->update()
        };
    }

    public function store()
    {
        return [
            'contract_id' => 'integer',
            'date_inclusion' => 'required|date',
        ];
    }

    public function update()
    {
        return [
            'date_inclusion' => 'date',
        ];
    }
}
