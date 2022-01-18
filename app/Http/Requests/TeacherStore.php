<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStore extends FormRequest
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
            //
            'thumbnail' => 'required|string',
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10'
        ];
    }
}
