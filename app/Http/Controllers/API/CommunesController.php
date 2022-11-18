<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Communes;
use Illuminate\Http\Request;

class CommunesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $communes = Communes::all()->toArray();

        return response()->json($communes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function show(Communes $communes)
    {
        return $communes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function edit(Communes $communes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Communes $communes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Communes $communes)
    {
        //
    }
}
