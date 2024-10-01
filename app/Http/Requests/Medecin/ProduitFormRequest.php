<?php

namespace App\Http\Requests\Medecin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Produit;

class ProduitFormRequest extends FormRequest
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
            'nom' => ['required', 'string'],
            'description' => ['required', 'min:6', 'string']
        ];
    }
}
