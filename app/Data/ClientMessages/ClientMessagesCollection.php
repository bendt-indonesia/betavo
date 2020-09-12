<?php

namespace App\Data\ClientMessages;

use App\Models\ClientMessages;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ClientMessagesCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (ClientMessages $model) {
            return (new ClientMessagesResource($model))->additional($this->additional);
        });

        return parent::toArray($request);
    }
}
