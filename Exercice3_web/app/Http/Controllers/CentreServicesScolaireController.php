<?php

namespace App\Http\Controllers;

use App\Http\Resources\CentreServicesScolaireCollection;
use App\Http\Resources\CentreServicesScolaireResource;
use App\Http\Resources\PosteCollection;
use App\Models\CentreServicesScolaire;
use App\Models\Ecole;
use Illuminate\Http\Request;

class CentreServicesScolaireController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : CentreServicesScolaireCollection
    {
        $centres = CentreServicesScolaire::all();

        $request->input('order') != '1' ?: $centres = $centres->sortByDesc('postes_totaux');

        return new CentreServicesScolaireCollection($centres);
    }

    public function showPostebyCentre(CentreServicesScolaire $centre) : PosteCollection
    {
        $ecoles = $centre->ecole()->get();

        $func = function(Ecole $ecole) {
            return $ecole->poste()->get();
        };

        $postes = $ecoles->flatmap($func);
        return new PosteCollection($postes->all());
    }
}
