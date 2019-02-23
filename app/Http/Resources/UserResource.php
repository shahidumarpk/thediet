<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use URL;
use Storage;
class UserResource extends JsonResource
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
        if($this->avatar=='placeholder.png'){
            $Avatarurl=URL::to('/').Storage::disk('local')->url('public/users/'.$this->avatar);
        }else{
            $Avatarurl=URL::to('/').Storage::disk('local')->url('public/users/'.$this->id.'/'.$this->avatar);
        }
        return [
            'name'=> $this->name,
            'Avatarurl' => $Avatarurl

        ];
    }
}
