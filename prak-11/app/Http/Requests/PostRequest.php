<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // Validasi aturan untuk 'judul' (string dengan maksimal 255 karakter)
            'title' => ['string', 'max:255'],

            // Validasi aturan untuk 'kategori' (string dengan maksimal 255 karakter)
            'category' => ['string', 'max:255'],

            // Validasi aturan untuk 'konten' (string dengan maksimal 255 karakter)
            'content' => ['string', 'max:255'],

            // Validasi aturan untuk 'penulis' (string dengan maksimal 255 karakter)
            'author' => ['string', 'max:255'],
        ];
    }
}
