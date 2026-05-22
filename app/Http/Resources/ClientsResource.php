<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientsResource extends JsonResource
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
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'email' => $this->email,
        'phone' => $this->phone,
        'address' => $this->address,
        'city' => $this->city,
        'document_id' => $this->document_id,
        'is_active' => (bool) $this->is_active, 
    ];
    }
}
