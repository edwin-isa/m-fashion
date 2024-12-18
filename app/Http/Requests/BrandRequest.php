<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'name' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'image.image' => 'Logo harus berupa image!',
            'image.mimes' => 'Format logo hanya bisa ".jpg,.png,.jpeg"!',
            'image.max' => 'Maxksimal ukuran logo 2mb!',
            'name.required' => 'Nama brand harus diisi!'
        ];
    }
}
