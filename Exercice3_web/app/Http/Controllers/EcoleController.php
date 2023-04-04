<?php

namespace App\Http\Controllers;

use App\Http\Resources\EcoleCollection;
use App\Http\Resources\EcoleResource;
use App\Http\Resources\PosteCollection;
use App\Models\Ecole;
use App\Models\Poste;
use Illuminate\Http\Request;

class EcoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : EcoleCollection
    {
        $ecole = Ecole::paginate(10);
        return new EcoleCollection($ecole);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ecole $ecole) : EcoleResource
    {
        return new EcoleResource($ecole);
    }

    /**
     * display the post of the specified school.
     *
     * @param Ecole $ecole
     * @return PosteCollection
     */
    public function showschoolPost(Ecole $ecole) : PosteCollection {
        $postes = $ecole->poste()->get();
        return new PosteCollection($postes);
    }

}
