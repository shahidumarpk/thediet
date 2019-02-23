<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TrulieassetResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\Trulieassets as TruliesassetsResource;

class TrulieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=> $this->id,
            'description'=> $this->description,
            'latitude'=> $this->latitude,
            'longitude'=> $this->longitude,
            'location'=> $this->location,
            'created_at'=> $this->created_at->format('d-M-Y h:i:s'),
            'createdat'=> $this->created_at->diffForHumans(),
            'trues'=> $this->reactiontrues_count,
            'lies'=> $this->reactionlies_count,
            'mereacted'=> $this->mereacted_count,
            'user_id'=> $this->user_id,
            'userinfo'=> new UserResource($this->user),
            'assets'=> new TruliesassetsResource($this->assets),
            'mereact'=> $this->mereacted,

        ];
    }
}
