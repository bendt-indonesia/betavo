<?php

namespace App\Data\ProdukSubKategori;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RequestUpdateProdukSubKategori extends FormRequest
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
            'meta_title' => 'required|max:360',
			'meta_description' => 'max:65500',
			'meta_keywords' => 'max:65500',
			'prioritas' => 'required|numeric|min:0|regex:/^\d*(\.\d{1,1000})?$/',
			'id_kategori' => 'required|exists:produk_kategori,id',
			'nama_sub_kategori' => 'required|max:150',
			'deskripsi' => 'max:65500',
			'image_url' => 'nullable|image|max:5120',
			'is_active' => 'required|in:0,1',
        ];
    }

    /**
     * Failed validation disable redirect
     *
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
