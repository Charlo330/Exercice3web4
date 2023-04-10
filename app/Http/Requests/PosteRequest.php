<?php

namespace App\Http\Requests;

use App\Rules\ValidCharge;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Requests pour les postes.
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class PosteRequest extends FormRequest
{
    /**
     * Determine si un utilisateur est autorisé d'intéragir avec les postes
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Les règles de validations pour un poste
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string> Liste des règles
     */
    public function rules(): array
    {
        return [
            'ecole_id' => 'required|exists:ecoles,id',
            'charge' => ['required', new ValidCharge()]
        ];
    }
}
