<?php

namespace App\Http\Controllers;

use App\Models\Metiers;
use App\Models\Photos;
use App\Models\Travaux;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InspirationsController extends Controller
{
    public function index() {
        $travaux = DB::table('travaux')
            ->select('nom')
            ->get();

        $randMetiers = DB::table('metiers')
            ->join('photos_metiers', 'metiers.id', '=', 'photos_metiers.id_metiers')
            ->join('photos', 'photos.id', '=', 'photos_metiers.id_photos')
            ->select('metiers.*', 'photos.images')
            ->orderBy(DB::raw('RAND()'))
            ->get();

        $metiers = Metiers::select('nom')
            ->get();

        $randInspirations = Photos::select('photos.id', 'images', 'photos_inspirations.legende')
            ->join('photos_inspirations', 'photos.id', '=', 'photos_inspirations.id_photos')
            ->orderBy(DB::raw('RAND()'))
            ->get();


        return view('inspirations', compact('travaux', 'randMetiers', 'metiers', 'randInspirations'));
    }
}
