<?php

namespace App\Data\ProdukKategori;

use App\Models\ProdukKategori;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProdukKategoriCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (ProdukKategori $model) {
            return (new ProdukKategoriResource($model))->additional($this->additional);
        });

        return parent::toArray($request);
    }
}
