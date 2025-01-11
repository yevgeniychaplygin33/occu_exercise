<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    protected $redirect = '/index';

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'title' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'A name is required',
            'title.required' => 'A title is required',
            'city.required' => 'A city is required',
            'state.required' => 'A state is required',
        ];
    }
}
