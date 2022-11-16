<?php

namespace App\Http\Controllers;

use App\Models\Artisans;
use App\Models\Fournisseurs;
use App\Models\Metiers;
use App\Models\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $metiers = Metiers::select('id', 'nom')
            ->get();

        $randMetiers = DB::table('metiers')
            ->join('photos_metiers', 'metiers.id', '=', 'photos_metiers.id_metiers')
            ->join('photos', 'photos.id', '=', 'photos_metiers.id_photos')
            ->select('metiers.*', 'photos.images')
            ->orderBy(DB::raw('RAND()'))
            ->get();

        $nombreArtisans = Artisans::select('*')
            ->count();

        $nombreFournisseurs = Fournisseurs::select('*')
            ->count();

        $inspirations = Metiers::select('id', 'nom')
            ->where('id', '!=', '6')
            ->get();

        foreach ($inspirations as $value) {
            $val=$value["id"];
            $inspi_img = Photos::select('images')
                ->join('photos_inspirations', 'photos_inspirations.id_photos', '=', 'photos.id')
                ->where('photos_inspirations.id_metiers' , '=', $val)
                ->get();

            $value["img"] = $inspi_img;
        }

        $fournisseurs = Fournisseurs::select('logo')
            ->get();

        return view('home', compact('metiers', 'randMetiers', 'nombreArtisans', 'nombreFournisseurs', 'inspirations', 'fournisseurs'));
    }
}
