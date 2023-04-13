<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
        $rules= [
            'name'=> 'required|alpha|min:3',
            'email' => 'required|email|unique:Users',
            'gender'=> 'required',
            'address'=> 'required',
            'city'=> 'required',
            'country' => 'required',
            'phone' => 'required|min:11',
            'password'=> 'required|min:8|confirmed'
        ];
        
        return $rules;
    }
}
