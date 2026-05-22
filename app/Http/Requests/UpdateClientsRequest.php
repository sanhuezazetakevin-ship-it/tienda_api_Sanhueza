<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClientsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'email' => 'required|email|max:255|unique:clients,email',
            'phone' => 'required|string|max:20|unique:clients,phone',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'document_id' => 'required|string|max:50|unique:clients,document_id',
            'is_active' => 'nullable|boolean',
        ];
    }
}
