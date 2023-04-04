<?php

namespace App\Http\Controllers;

use App\Http\Resources\CentreServicesScolaireResource;
use App\Models\CentreServicesScolaire;
use Illuminate\Http\Request;

class CentreServicesScolaireController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(CentreServicesScolaire $centreServicesScolaire): CentreServicesScolaireResource
    {
        return new CentreServicesScolaireResource($centreServicesScolaire);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CentreServicesScolaire $centreServicesScolaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CentreServicesScolaire $centreServicesScolaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CentreServicesScolaire $centreServicesScolaire)
    {
        //
    }
}
