<?php

namespace App\Http\Requests\crud;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDataInforRequest extends FormRequest
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
        return [
            'name' => ['required', 'min:3', 'string'],
            'age' => ['required', 'numeric', 'string'],
            'email' => ['required', 'email', Rule::unique('data_infos', 'email'), 'string'],
            'address' => ['required', 'string'],
        ];
    }
}
