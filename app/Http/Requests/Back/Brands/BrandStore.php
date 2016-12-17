<?php

namespace App\Http\Requests\Back\Brands;

use Illuminate\Foundation\Http\FormRequest;

class BrandStore extends FormRequest
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
            'photo' => 'required|image',
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'contact_name' => 'required',
            'phone' => 'required|max:30|numeric',
            'province_id' => 'required',
            'city_id' => 'required',
            'subdistrict_id' => 'required',
            'address' => 'required',
            'postal_code' => 'max:5|numeric',
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
            'photo.required' => 'Foto Wajib Diisi!',
            'photo.image' => 'Gambar Harus Dengan Format (jpeg, png, bmp, gif, atau svg)!',
            'name.required' => 'Nama Brand Wajib Diisi!',
            'name.max' => 'Nama Maksimal 100 Karakter',
            'email.required' => 'Email Wajib Diisi!',
            'email.email' => 'Email Tidak Sesuai!',
            'email.max' => 'Email Maksimal 100 Karakter',
            'contact_name.required' => 'Nama Kontak Tidak Boleh Kosong!',
            'phone.required' => 'Telepon Wajib Diisi!',
            'phone.max' => 'Telepon Maksimal 30 Karakter',
            'phone.numeric' => 'Telepon Harus Berupa Angka.'
            'province_id.required' => 'Provinsi Wajib Diisi!',
            'city_id.required' => 'Kota Wajib Diisi!',
            'subdistrict_id.required' => 'Kecamatan Wajib Diisi!',
            'address.required' => 'Alamat Wajib Diisi!',
            'postal_code.max' => 'Kode Pos Maksimal 5 Karakter',
            'postal_code.numeric' => 'Kode Pos Harus Berupa Angka',
        ];
    }
}
