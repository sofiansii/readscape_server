<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'userId' => 'required|string', // Validate userId as a string and ensure it exists in the users table
            'orderlines' => 'required|array|min:1',        // Must include at least one orderline
            'orderlines.*.book_id' => 'required|integer', // Validate book_id
            'orderlines.*.price' => 'required|numeric|min:0',            // Validate price as non-negative
            'orderlines.*.quantity' => 'required|integer|min:1',         // Validate quantity as at least 1
        ];
    }
}
