<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Project;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:10', 'unique:projects,title'],
            'data_progetto' => ['nullable'],// se non fosse nullable non me li prende nel form create
            'difficoltà' => ['required'],
            'descrizione' => ['nullable'] // se non fosse nullable non me li prende nel form create
        ];
    }
}
