<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'nama_kategori.required' => 'Nama kategori wajib diisi.',
            'nama_kategori.string' => 'Nama kategori harus berupa teks.',
            'nama_kategori.max' => 'Nama kategori tidak boleh lebih dari 255 karakter.',
            'deskripsi.string' => 'Deskripsi harus berupa teks.',
            'deskripsi.max' => 'Deskripsi tidak boleh lebih dari 1000 karakter.',
        ];
    }
}
