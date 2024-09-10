<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UnitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'unitNumber' => $this->number,
            'description' => $this->description,
            'backgroundColor' => $this->backgroundColor,
            'textColor' => $this->textColor,
            'borderColor' => $this->borderColor,
            'tiles' => $this->tiles
        ];
    }
}
