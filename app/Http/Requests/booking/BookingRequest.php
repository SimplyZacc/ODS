<?php

namespace App\Http\Requests\booking;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'itemName' => 'required| regex:~^[a-zA-Z0-9 ]+$~',
            'itemDosage' => 'required|regex:~^[a-zA-Z0-9()-:., ]+$~',
            'amount' => 'required|numeric',
            'customerName' => 'required| regex:~^[a-zA-Z0-9()-:., ]+$~',
            'customerAddress'=> 'required| regex:~^[a-zA-Z0-9()-:., ]+$~',
            'status' => 'required| regex:~^[a-zA-Z0-9()-:., ]+$~',
        ];
    }
}
