<?php

namespace App\Http\Controllers;

use App\Models\Artisans;
use App\Models\Edition;
use App\Models\Fournisseurs;
use App\Models\Metiers;
use App\Models\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class HomeController extends Controller
{
    public function index()
    {

        $homeEdito = DB::table('editions')->select('*')->where('identifier', '=', 'home_edito')->get();
        $homeHome = DB::table('editions')->select('*')->where('identifier', '=', 'home_home')->get();


        $metiers = Metiers::select('id', 'libelle')
            ->get();

        $randMetiers = DB::table('metiers')
            ->join('photos_metiers', 'metiers.id', '=', 'photos_metiers.id_metiers')
            ->join('photos', 'photos.id', '=', 'photos_metiers.id_photos')
            ->select('metiers.*', 'photos.data')
            ->orderBy(DB::raw('RAND()'))
            ->get();

        $nombreArtisans = Artisans::select('*')
            ->count();

        $nombreFournisseurs = DB::table('fournisseurs')
            ->select('*')
            ->count();

        $inspirations = Metiers::select('id', 'libelle')
            ->where('id', '!=', '6')
            ->get();

        foreach ($inspirations as $value) {
            $val = $value["id"];
            $inspi_img = Photos::select('data')
                ->join('photos_inspirations', 'photos_inspirations.id_photos', '=', 'photos.id')
                ->where('photos_inspirations.id_metiers', '=', $val)
                ->get();

            $value["img"] = $inspi_img;
        }

        $fournisseurs = DB::table('fournisseurs')
            ->select('logo')
            ->get();

        return view('home', compact('homeHome', 'homeEdito', 'metiers', 'randMetiers', 'nombreArtisans', 'nombreFournisseurs', 'inspirations', 'fournisseurs'));
    }
}
