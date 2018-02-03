<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
                'name' => 'required|max:255',
                'release_date' => 'required',
                'storyline' => 'required',
                'ratings' => 'required',
                'keywords' => 'required',
                'taglines' => 'required',
                'language_id' => 'required',
                'genre_id' => 'required'
        ];
    }
}
