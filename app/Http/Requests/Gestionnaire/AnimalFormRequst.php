<?php

namespace App\Http\Requests\Gestionnaire;

use App\Models\Animal;
use App\Models\FicheControle;
use Illuminate\Foundation\Http\FormRequest;

class AnimalFormRequst extends FormRequest
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
            'numero' => ['required'],
            'origine' => ['required'],
            'robe' => ['required'],
            'date_nais' => ['required'],
            'date_arriv' => ['required'],
            'description' => ['required'],
            'race' => ['required'],
            'capacite_prod' => ['required'],
            'photo' => ['image', 'max:2000'],
            'etat_lactation' => ['string']
        ];
    }
}
