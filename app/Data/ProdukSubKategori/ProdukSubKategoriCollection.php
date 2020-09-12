<?php

namespace App\Data\ProdukSubKategori;

use App\Models\ProdukSubKategori;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProdukSubKategoriCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (ProdukSubKategori $model) {
            return (new ProdukSubKategoriResource($model))->additional($this->additional);
        });

        return parent::toArray($request);
    }
}
