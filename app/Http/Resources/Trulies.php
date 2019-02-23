<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Trulie;

class Trulies extends ResourceCollection
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
        $this->collection->transform(function (Trulie $trulie) {
            return (new TrulieResource($trulie));
        });

        return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            'success' => 1,
            'message' => 'Records found.'
        ];
    }
}
