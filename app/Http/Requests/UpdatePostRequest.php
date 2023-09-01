<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|max:50',
            'cover_image' => 'image|max:250',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function messages(){
        return [
            'title.required' => "Il titolo e' obbligatorio",
            'title.max'      => 'Il titolo deve essere lungo al massimo :max caratteri',
            'cover_image.image' => 'Il file inviato deve avere una delle seguenti estenssioni: jpg, png, jpeg, webp',
            'cover_image.max' => 'Il nome del file deve essere lungo al massimo :max caratteri',
            'category_id.required' => 'Devi selezionare una categoria',
            'category_id.exist'    => 'Categoria selezionata non valida'
        ];
    }
}
