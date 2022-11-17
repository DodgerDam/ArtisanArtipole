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
            ->select('metiers.id as metID', 'metiers_artisans.id_artisans as metArIDAr', 'metiers.nom as metNom', 'metiers.id as metId', 'metiers_artisans.id_metiers as metArIdMe', 'artisans.id as artID','id_artisans')
            ->get();

        $specialites = DB::table('specialites')
            ->join('specialites_artisans', 'specialites_artisans.id_specialites', '=', 'specialites.id')
            ->join('artisans', 'specialites_artisans.id_artisans', '=', 'artisans.id')
            ->select('specialites.id as speID', 'specialites_artisans.id_artisans as speArID', 'specialites.nom as speNom')
            ->get();

        $certifications = DB::table('certifications')
            ->join('certif_artisans', 'certif_artisans.id_certifications', '=', 'certifications.id')
            ->join('artisans', 'certif_artisans.id_artisans', '=', 'artisans.id')
            ->select('certifications.id as certID', 'certif_artisans.id_artisans as certArID', 'certifications.nom as certNom')
            ->get();

        $domaineArtisan = DB::table('');

        $artisanID = $id;

        $filterMetiers = $request->metiers;
        $filterVille = $request->code;


        if ($id == 0) {
            return view('listing-artisan', compact('artisanID','artisans', 'metiers', 'randMetiers', 'domaines', 'filterMetiers', 'filterVille', 'specialites', 'certifications'));
        } else {
            return view('fiche-artisan', compact('artisanID','artisans', 'metiers', 'randMetiers', 'domaines', 'filterMetiers', 'filterVille', 'specialites', 'certifications'));
        }


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
