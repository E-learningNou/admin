<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name'     =>['required','string','max:20','min:2'],
            'age'      => 'required|numeric|min:15|',
            'password' =>'required|distinct|min:7|'   ,
            'email'   =>'required|email',
            'phone'   =>'required|numeric|max:11',
            'image'   =>'required|image'

        ];
    }
}
