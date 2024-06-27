<?php

namespace App\Http\Requests;


class Income_request extends BaseRequest
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
            "name" => ["string", "required", "unique:incomes,name"],
            "price" => ["required", "numeric"],
            "transaction_date" => ["required", "date"]
        ];
    }
}
