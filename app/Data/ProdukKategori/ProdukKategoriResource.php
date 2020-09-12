<?php

namespace App\Data\ProdukKategori;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdukKategoriResource extends JsonResource
{
    /**
     * Transform the resource model ProdukKategori into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
			'sort_no' => $this->sort_no,
			'name' => $this->name,
			'slug' => $this->slug,
			'image_url' => $this->image_url,
			'description' => $this->description,
			'is_active' => $this->is_active,
        ];
    }
}
