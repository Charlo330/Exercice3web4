<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Ressource pour les postes.
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class PosteResource extends JsonResource
{
    /**
     * Transforme la ressource en array
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
