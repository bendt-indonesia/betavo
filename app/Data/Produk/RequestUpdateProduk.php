<?php

namespace App\Data\Produk;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RequestUpdateProduk extends FormRequest
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
			'id_kategori' => 'required|exists:produk_sub_kategori,id',
			'nama_produk' => 'required|max:150',
			'deskripsi' => 'required|max:65500',
			'link_bukalapak' => 'max:1000',
			'link_shopee' => 'max:1000',
			'link_tokopedia' => 'max:1000',
			'image_url_1' => '',
			'image_url_2' => '',
			'image_url_3' => '',
			'image_url_4' => '',
			'image_url_5' => '',
			'youtube_video_url_1' => 'max:150',
			'is_active' => 'required|in:0,1',
			'is_featured' => 'required|in:0,1',
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
