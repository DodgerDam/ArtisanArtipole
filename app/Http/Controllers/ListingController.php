<?php

namespace App\Http\Controllers;

use App\Models\Artisans;
use App\Models\Commune;
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
            ->select('metiers.id as metID', 'metiers_artisans.id_artisans as metArIDAr', 'metiers.nom as metNom', 'metiers.id as metId', 'metiers_artisans.id_metiers as metArIdMe', 'artisans.id as artID', 'id_artisans')
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

        $artisanID = $id;

        $filterMetiers = $request->metiers;
        $filterVille = DB::table('communes')
            ->select('*')
            ->where('code_postal', "=", $request->code)
            ->where('libelle' ,'=', $request->ville)
            ->get();
        $filterRadius = $request->radius;

        $communes = DB::table('communes')
            ->get();


//          GET ALL DATA FOR COMMUNES TABLE FROM GOUV
//
//        $unwanted_array = array('Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
//            'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
//            'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
//            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
//            'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y');
//
//        $unwanted_spaces = array(' ' => '%20');
//
//        $all = json_decode(file_get_contents('https://geo.api.gouv.fr/communes'));
//
//        DB::table('communes')
//            ->delete();
//
//        foreach ($all as $unique) {
//            $link = "https://geo.api.gouv.fr/communes?nom=" . strtr($unique->nom, $unwanted_array) . "&fields=nom,centre";
//            $data = (json_decode(file_get_contents(strtr($link, $unwanted_spaces))));
//            $post = new Commune();
//            $post->libelle = strtr($unique->nom, $unwanted_array);
//            $post->departement = $unique->codeDepartement;
//            if (isset($unique->codesPostaux[0])) {
//                $post->code_postal = $unique->codesPostaux[0];
//            }
//            $post->latitude = $data[0]->centre->coordinates[1];
//            $post->longitude = $data[0]->centre->coordinates[0];
//
//            $post->save();
//        }


        if ($id == 0) {
            return view('listing-artisan', compact('filterRadius', 'artisanID', 'artisans', 'metiers', 'randMetiers', 'communes', 'domaines', 'filterMetiers', 'filterVille', 'specialites', 'certifications'));
        } else {
            return view('fiche-artisan', compact('filterRadius', 'artisanID', 'artisans', 'metiers', 'randMetiers', 'communes', 'domaines', 'filterMetiers', 'filterVille', 'specialites', 'certifications'));
        }


    }

    public
    function json()
    {
        $artisans = Artisans::select('*')
            ->get();

        return json_encode($artisans);
    }
}
