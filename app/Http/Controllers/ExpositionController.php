<?php

namespace App\Http\Controllers;

use App\Models\Metiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpositionController extends Controller
{
    public function index(){
        $metiers = Metiers::select('id', 'libelle')
            ->get();

        $randMetiers = DB::table('metiers')
            ->join('photos_metiers', 'metiers.id', '=', 'photos_metiers.id_metiers')
            ->join('photos', 'photos.id', '=', 'photos_metiers.id_photos')
            ->select('metiers.*', 'photos.data')
            ->orderBy(DB::raw('RAND()'))
            ->get();

        return view('exposition', compact('randMetiers', 'metiers'));
    }
}
