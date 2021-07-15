<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistration extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:registrants',
            'gender' => 'required|in:0,1',
            'birthday' => 'required|date',
            'contact_no' => 'required|min:11|unique:registrants',
            'age' => 'required|numeric|between:18,30',
            'street' => 'required|max:255',
            'landmark' => 'required|max:255',
        ];
    }
}