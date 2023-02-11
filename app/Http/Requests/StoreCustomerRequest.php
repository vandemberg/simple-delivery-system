<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:254',
            'phone' => 'required|size:15',
            'email' => 'nullable|email',
            'address' => 'required|min:3|max:254',
            'neighbourhood' => 'required|min:3|max:254',
            'city' => 'required|min:3|max:254',
            'CEP' => 'nullable|regex:/^\d{5}-\d{3}$/',
        ];
    }
}
