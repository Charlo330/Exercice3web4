<?php

namespace App\Http\Controllers;

use App\Http\Resources\EcoleCollection;
use App\Http\Resources\EcoleResource;
use App\Http\Resources\PosteCollection;
use App\Models\Ecole;
use App\Models\Poste;
use Illuminate\Http\Request;

/**
 * Controller pour les écoles.
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class EcoleController extends Controller
{
    /**
     * Avoir les informations de toutes les ecoles, pagnier à coup de 10
     */
    public function index() : EcoleCollection
    {
        $ecole = Ecole::paginate(10);
        return new EcoleCollection($ecole);
    }

    /**
     * Obtenir les informations à propos d'une école
     */
    public function show(Ecole $ecole) : EcoleResource
    {
        return new EcoleResource($ecole);
    }

    /**
     * Obtenir les informations concernant les postes d'un école
     *
     * @param Ecole $ecole L'école en question
     * @return PosteCollection Collection des postes dans l'école en paramètre
     */
    public function showschoolPost(Ecole $ecole) : PosteCollection {
        $postes = $ecole->poste()->get();
        return new PosteCollection($postes);
    }

}
