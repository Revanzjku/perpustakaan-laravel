<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
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
            //
            'judul_buku' => 'required|string|max:255',
            'pengarang_buku' => 'required|string|max:255',
            'penerbit_buku' => 'required|string|max:255',
            'tahun_terbit_buku' => 'required|integer|min:1900|max:' . date('Y'),
            'stok_buku' => 'required|integer|min:1',
            'id_kategori' => 'required|exists:kategori,id'
        ];
    }

    public function messages()
    {
        return [
            'judul_buku.required' => 'Judul buku wajib diisi.',
            'pengarang_buku.required' => 'Pengarang buku wajib diisi.',
            'penerbit_buku.required' => 'Penerbit buku wajib diisi.',
            'tahun_terbit_buku.required' => 'Tahun terbit buku wajib diisi.',
            'tahun_terbit_buku.integer' => 'Tahun terbit buku harus berupa angka.',
            'tahun_terbit_buku.min' => 'Tahun terbit buku tidak boleh kurang dari 1900.',
            'tahun_terbit_buku.max' => 'Tahun terbit buku tidak boleh lebih dari tahun sekarang.',
            'stok_buku.required' => 'Stok buku wajib diisi.',
            'stok_buku.integer' => 'Stok buku harus berupa angka.',
            'stok_buku.min' => 'Stok buku minimal 1.',
            'id_kategori.required' => 'Kategori buku wajib dipilih.',
            'id_kategori.exists' => 'Kategori yang dipilih tidak valid.',
        ];
    }
}
