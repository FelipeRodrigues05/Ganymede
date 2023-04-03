<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestClientRules extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required',
            'email' => 'required | email | unique:clients',
            'phone' => 'required',
            'address' => 'required'
        ];

        if ($this->method() === 'PUT') {
            $rules['email'] = [
                'required',
                'email',
                Rule::unique('clients')->ignore($this->id)
            ];
        }

        return $rules;
    }
}
