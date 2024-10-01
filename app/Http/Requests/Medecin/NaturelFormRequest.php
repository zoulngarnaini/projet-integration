<?php

namespace App\Http\Requests\Medecin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Gestation;
class NaturelFormRequest extends FormRequest
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
            'date_nature' => ['required'],
            'user_id' => ['required', 'integer'],
            'animal_id' => ['required', 'integer'],
            'etat' => ['string']
        ];
    }
}
