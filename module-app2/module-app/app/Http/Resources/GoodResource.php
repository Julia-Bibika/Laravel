<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->whenNotNull($this->title),
            'owner' => $this->whenNotNull($this->owner),
            'price'=> $this->whenNotNull($this->price),
            'date'=>$this->whenNotNull($this->date),
            'owner_id'=> $this->owner_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
