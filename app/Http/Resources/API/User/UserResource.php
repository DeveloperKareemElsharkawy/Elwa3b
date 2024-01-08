<?php

namespace App\Http\Resources\API\User;

use App\Http\Resources\API\Location\StateResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'image' => $this->imageUrl,
            'state' => new StateResource($this->state),
            'zone' => $this->zone,
            'street' => $this->street,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
