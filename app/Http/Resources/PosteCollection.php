<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Ressource pour les collections de postes.
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class PosteCollection extends ResourceCollection
{
    /**
     * Transforme la collection de ressource en array
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
