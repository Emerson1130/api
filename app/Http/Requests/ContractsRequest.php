<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractsRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return match ($this->method()) {
            'POST' => $this->store(),
            'PUT' => $this->update(),
            'DELETE' => $this->destroy(),
            default => $this->view()
        };
    }

    public function store()
    {
        return [

            'date_of_issue' => 'date|required',
            'number' => [
                'required',
                'min:4',
                'max:6',
            ],
        ];
    }

    public function update()
    {
        return [

            'date_of_issue' => 'date',
            'number' => [
                'min:4',
                'max:6',
            ],
        ];
    }
}
