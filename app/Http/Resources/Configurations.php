<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Configurations extends ResourceCollection
{

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'configurationCollection' => parent::toArray($request),
//        'configurationCollection' => $this->collection
        ];
    }
}