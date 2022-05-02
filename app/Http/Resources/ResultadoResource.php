<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultadoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'descripcion' => $this->descripcion,
            //'slug' => $this->slug,
            //'extract' => $this->extract,
            //'body' => $this->body,
            'status' => $this->status == 1 ? 'BORRADOR' : 'PUBLICADO',
            //'user' => UserResource::make($this->whenLoaded('user')),
            //'category' => CategoryResource::make($this->whenLoaded('category')),
        ];
    }
}