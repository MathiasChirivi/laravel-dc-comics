<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFumettoRequest extends FormRequest
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
            "title" => "required|min:4|max:50",
            "description" => "required|min:5|max:65535",
            "type" => "required|max:50",
            "thumb"=> "required",
            "Price" => "required|max:50",
            "sale_date" => "required|max:50",
            "Series" =>"required|max:50",
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo Titolo è richiesto',
            'title.min' => 'Il campo Titolo deve avere almeno 4 caratteri',
            'title.max' => 'Il campo Titolo non deve superare i 50 caratteri',
            'description.required' => 'Il campo Descrizione è richiesto',
            'type.required' => 'Il campo Tipologia è richiesto',
            'thumb.required' => 'Il campo dell immagine è richiesto',
            'Price.required' => 'Il campo Prezzo è richiesto',
            'Series.required' => 'Il campo Serie è richiesto',
            'sale_date.required' => 'Il campo Data Rilascio è richiesto',
        ];
    }
}
