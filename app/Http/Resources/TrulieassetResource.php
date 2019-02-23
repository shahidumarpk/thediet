<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use URL;
use Storage;

class TrulieassetResource extends JsonResource
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
        $filepath=URL::to('/').Storage::disk('local')->url('public/trulies/'.$this->trulie_id.'/'.$this->filename);
        return [
            'filetype'=> $this->filetype,
            'filepath' => $filepath
        ];
    }
}
