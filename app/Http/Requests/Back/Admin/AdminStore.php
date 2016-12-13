<?php

namespace App\Http\Requests\Back\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminStore extends FormRequest
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
			'email' => 'required|email|max:100',
			'password' => 'required|min:8',
			'password_confirmation' => 'required|min:8|same:password',
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
			'name.required' => 'Nama wajib diisi!',
			'name.max' => 'Nama maksimal 100 karakter',
			'email.required' => 'Email wajib diisi!',
			'email.email' => 'Email tidak sesuai.',
			'email.max' => 'Email maksimal 100 karakter',
			'password.required' => 'Password wajib diisi!',
			'password.min' => 'Password minimal 8 karakter',
			'confirmPassword.required' => 'Konfirmasi Password wajib diisi!',
			'confirmPassword.same' => 'Konfirmasi Password tidak sesuai dengan Password.',
			'confirmPassword.min' => 'Konfirmasi Password minimal 8 karakter',
		];
	}
}
