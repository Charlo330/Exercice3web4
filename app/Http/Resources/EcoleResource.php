<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Ressource pour les écoles.
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class EcoleResource extends JsonResource
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
