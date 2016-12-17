<?php

namespace App\Http\Requests\Back\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStore extends FormRequest
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
            //
            'name' => 'required|max:100',
            'icon' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
            'name.required' => 'Nama Harus Diisi!',
            'name.max' => 'Nama Maksimal 100 Karakter',
            'icon.required' => 'Icon Harus Diisi!',
        ];
    }
}
