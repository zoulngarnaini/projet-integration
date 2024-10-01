<?php

namespace App\Http\Requests\Medecin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Insemination;

class InseminationFormRequest extends FormRequest
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
            'date_insemination' => ['required'],
            'animal_id' => ['required'],
            'user_id' => ['required']
        ];
    }
}
