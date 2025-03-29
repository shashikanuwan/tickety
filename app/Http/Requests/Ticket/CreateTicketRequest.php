<?php

namespace App\Http\Requests\Ticket;

use Illuminate\Foundation\Http\FormRequest;

class CreateTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'customer_name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'digits:10', 'regex:/^[0-9]{10}$/'],
            'description' => ['required', 'string'],
        ];
    }
}
