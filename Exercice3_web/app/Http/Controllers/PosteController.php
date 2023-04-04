<?php

namespace App\Http\Controllers;

use App\Http\Requests\PosteRequest;
use App\Http\Resources\PosteCollection;
use App\Http\Resources\PosteResource;
use App\Models\Poste;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : PosteCollection
    {
        $postes = Poste::all();
        return new PosteCollection($postes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PosteRequest $request) : PosteResource
    {
        $poste = Poste::create($request->validated());
        return new PosteResource($poste);
    }

    /**
     * Display the specified resource.
     */
    public function show(Poste $poste) : PosteResource
    {
        return new PosteResource($poste);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poste $poste) : PosteResource
    {
        $poste->delete();
        return new PosteResource($poste);
    }
}
