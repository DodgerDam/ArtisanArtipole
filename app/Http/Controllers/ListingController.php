<?php

namespace App\Http\Controllers;

use App\Models\Artisans;
use App\Models\Metiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    public function show($id, Request $request)
    {
        $metiers = Metiers::select('id', 'nom')
            ->get();

        $randMetiers = DB::table('metiers')
            ->join('photos_metiers', 'metiers.id', '=', 'photos_metiers.id_metiers')
            ->join('photos', 'photos.id', '=', 'photos_metiers.id_photos')
            ->select('metiers.*', 'photos.images')
            ->orderBy(DB::raw('RAND()'))
            ->get();

        $artisans = DB::table('artisans')
            ->join('photos', 'artisans.id_photo_artisan', '=', 'photos.id')
            ->select('artisans.*', 'photos.images')
            ->get();

        $domaines = DB::table('metiers')
            ->join('metiers_artisans', 'metiers_artisans.id_metiers', '=', 'metiers.id')
            ->join('artisans', 'artisans.id', '=', 'metiers_artisans.id_metiers')
            ->select('metiers.nom', 'id_artisans')
            ->get();

        $artisanID = $id;

        $filterMetiers = $request->metiers;
        $filterVille = $request->ville;

        return view('listing-artisan', compact('artisanID', 'artisans', 'metiers', 'randMetiers', 'domaines', 'filterMetiers', 'filterVille'));
    }

    public function json()
    {
        $artisans = Artisans::select('*')
            ->get();

        return json_encode($artisans);
    }

    public function communes()
    {
        $communes = DB::table('commune')
            ->select('libelle')
            ->get();

        return view('communes', compact('communes'));
    }
}
