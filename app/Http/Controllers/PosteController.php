<?php

namespace App\Http\Controllers;

use App\Http\Requests\PosteRequest;
use App\Http\Resources\PosteCollection;
use App\Http\Resources\PosteResource;
use App\Models\Poste;
use Illuminate\Http\Request;

/**
 * Controller pour les postes.
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class PosteController extends Controller
{
    /**
     * Obtenir touts les postes
     */
    public function index() : PosteCollection
    {
        $postes = Poste::all();
        return new PosteCollection($postes);
    }

    /**
     * Enregistrer un nouveau poste
     */
    public function store(PosteRequest $request) : PosteResource
    {
        $poste = Poste::create($request->validated());
        return new PosteResource($poste);
    }

    /**
     * Obtenir l'informations sur un poste
     */
    public function show(Poste $poste) : PosteResource
    {
        return new PosteResource($poste);
    }

    /**
     * Retirer un poste
     */
    public function destroy(Poste $poste) : PosteResource
    {
        $poste->delete();
        return new PosteResource($poste);
    }
}
