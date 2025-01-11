<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{

    protected $redirect = '/index';

    public function rules(): array
    {
        return [
            'searchOption' => 'required',
            'searchInput' => 'required',
        ];
    }


    public function messages(): array
    {
        return [
            'searchOption.required' => 'Please choose what to search by.',
            'searchInput.required' => 'Please enter something to search.',
        ];
    }
}
