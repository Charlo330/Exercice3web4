<?php

namespace App\Http\Controllers;

use App\Http\Resources\CentreServicesScolaireCollection;
use App\Http\Resources\PosteCollection;
use App\Models\CentreServicesScolaire;
use App\Models\Ecole;
use Illuminate\Http\Request;

/**
 * Controller pour les centres de services scolaires.
 *
 * @author Charles-Antoine Lanthier, Maxime Labrecque
 */
class CentreServicesScolaireController extends Controller
{

    /**
     * Retourne la liste des centres de services scolaires
     */
    public function index(Request $request) : CentreServicesScolaireCollection
    {
        $centres = CentreServicesScolaire::all();

        $request->input('order') != '1' ?: $centres = $centres->sortByDesc('postes_totaux');

        return new CentreServicesScolaireCollection($centres);
    }

    /**
     * Obtenir l'informations sur les postes de toutes les ecoles dans le centre de service scolaire
     *
     * @param CentreServicesScolaire $centre Centre a obtenir l'information
     *
     * @return PosteCollection La liste des postes
     */
    public function showPostebyCentre(CentreServicesScolaire $centre) : PosteCollection
    {
        $ecoles = $centre->ecole()->get();

        $func = function(Ecole $ecole) {
            return $ecole->poste()->get();
        };

        $postes = $ecoles->flatmap($func);
        return new PosteCollection($postes);
    }
}
