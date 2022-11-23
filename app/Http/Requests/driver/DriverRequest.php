<?php

namespace App\Http\Requests\driver;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
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
            'fname' => "required| regex:~^[a-zA-Z']+$~",
            'lname' => "required| regex:~^[a-zA-Z']+$~",
            'email' => "required| regex:~^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$~",
            'telephone' => "required| regex:~^[0-9]{7}$~",
        ];
    }
}
