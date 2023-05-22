<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
{
    public static $wrap = 'owner';
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
        'country' => $this->whenNotNull($this->country),
        'contact_phone'=> $this->whenNotNull($this->contact_phone),
         'email'=>$this->whenNotNull($this->email),
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
    ];
    }
}
