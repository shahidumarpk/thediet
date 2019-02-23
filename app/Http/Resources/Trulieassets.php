<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Trulieasset;

class Trulieassets extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        $this->collection->transform(function (Trulieasset $trulieasset) {
            return (new TrulieassetResource($trulieasset));
        });

        return parent::toArray($request);
    }
}
