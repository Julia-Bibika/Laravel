<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StationResource extends JsonResource
{
    public static $wrap = 'station';
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
            'address'=> $this->whenNotNull($this->address),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'creator_user_id'=>$this->creator_user_id,
        ];
    }
}
