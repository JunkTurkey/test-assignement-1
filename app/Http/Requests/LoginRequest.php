<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'username' => 'required|string',
            'phonenumber' => 'required|numeric',
        ];
    }
}
