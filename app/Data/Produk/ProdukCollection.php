<?php

namespace App\Data\Produk;

use App\Models\Produk;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProdukCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Produk $model) {
            return (new ProdukResource($model))->additional($this->additional);
        });

        return parent::toArray($request);
    }
}
