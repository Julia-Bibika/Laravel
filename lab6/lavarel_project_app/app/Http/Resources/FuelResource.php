<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FuelResource extends JsonResource
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
            'brand' => $this->whenNotNull($this->brand),
            'amount' => $this->whenNotNull($this->amount),
            'price'=> $this->whenNotNull($this->price),
            'station_id'=> $this->station_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'creator_user_id'=>$this->creator_user_id,
        ];
    }
}
