<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolitiqueController extends Controller
{
    public function index() {
        $metiers = Metiers::select('id', 'nom')
            ->get();

        $randMetiers = DB::table('metiers')
            ->join('photos_metiers', 'metiers.id', '=', 'photos_metiers.id_metiers')
            ->join('photos', 'photos.id', '=', 'photos_metiers.id_photos')
            ->select('metiers.*', 'photos.images')
            ->orderBy(DB::raw('RAND()'))
            ->get();

        return view('informations/politique-confidentialite', compact('randMetiers', 'metiers'));
    }
}
