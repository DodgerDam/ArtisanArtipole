<?php

namespace App\Http\Controllers;

use App\Models\Artisans;
use App\Models\Commune;
use App\Models\Communes;
use App\Models\Metiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ListingController extends Controller
{
    public function show($id, Request $request)
    {

        // Selection de toutes les données de métiers et de leurs photos
        $randMetiers = DB::table('metiers')
            ->join('photos_metiers', 'metiers.id', '=', 'photos_metiers.id_metiers')
            ->join('photos', 'photos.id', '=', 'photos_metiers.id_photos')
            ->select('metiers.*', 'photos.images')
            ->orderBy(DB::raw('RAND()'))
            ->get();

//        $artisans = DB::table('artisans')
//            ->join('photos', 'artisans.id_photo_artisan', '=', 'photos.id')
//            ->select('artisans.*', 'photos.images')
//            ->get();

        // Selection de toutes les données d'artisans avec pagination par groupe de 16
        $artisans = DB::table('artisans')
            ->select('*')
            ->paginate(16);

        // Nombre d'artisans
        $nbArtisans = DB::table('artisans')
            ->count();

        // Selection de toutes les données d'artisans
        $allArtisans = DB::table('artisans')
            ->select('*')
            ->get();


        $domaines = DB::table('metiers')
            ->join('metiers_artisans', 'metiers_artisans.id_metiers', '=', 'metiers.id')
            ->join('artisans', 'artisans.id', '=', 'metiers_artisans.id_artisans')
            ->select('metiers.id as metID', 'metiers_artisans.id_artisans as metArIDAr', 'metiers.nom as metNom', 'metiers.id as metId', 'metiers_artisans.id_metiers as metArIdMe', 'artisans.id as artID', 'id_artisans')
            ->get();


        // Selection de toutes les données de métiers
        $metiers = DB::table('metiers')
            ->select('*')
            ->get();

        // Selection de toutes les spécialités
        $specialites = DB::table('specialites')
            ->join('specialites_artisans', 'specialites_artisans.id_specialites', '=', 'specialites.id')
            ->join('artisans', 'specialites_artisans.id_artisans', '=', 'artisans.id')
            ->select('specialites.id as speID', 'specialites_artisans.id_artisans as speArID', 'specialites.nom as speNom')
            ->get();

        // Selection de toutes les certifications des artisans
        $certifications = DB::table('certifications')
            ->join('certif_artisans', 'certif_artisans.id_certifications', '=', 'certifications.id')
            ->join('artisans', 'certif_artisans.id_artisans', '=', 'artisans.id')
            ->select('certifications.id as certID', 'certif_artisans.id_artisans as certArID', 'certifications.nom as certNom')
            ->get();

        // Liste des communes e
        $communes = DB::table('communes')
            ->select('*')
            ->get();

        // Id de l'artisan pour les infos personnelles
        $artisanID = $id;

        //Radius du filtre de base
        $filterRadius = 1000000;

        // Filtre métiers
        $filterMetiers = $request->metiers;
        $filterVille = $request->ville;

        // Selection de toutes les données pour le filtre de ville
//        $filterVille = DB::table('communes')
//            ->select('*')
//            ->where('code_postal', "=", $request->code)
//            ->where('libelle', '=', $request->ville)
//            ->get();

        // Changement du radius s'il a été choisis
        if ($request->radius != null) {
            $filterRadius = $request->radius;
        }

        // Filtre de page
        $page = $request->page;

        // Filtre page de base
        if ($page === null) {
            $page = 1;
        }




        if ((($filterMetiers == null) OR ($filterMetiers == '#')) AND ($filterVille == null)) {

            $filterArtisans = DB::table('artisans as a')
                ->select('a.*', 'c.libelle as ville')
                ->join('communes as c', 'c.id', '=', 'a.commune_id')
                ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                ->paginate(16);
        } elseif ((($filterMetiers == null) OR ($filterMetiers == '#')) AND ($filterVille == null)) {

            $filterArtisans = DB::table('artisans as a')
                ->select('a.*', 'c.libelle as ville')
                ->join('communes as c', 'c.id', '=', 'a.commune_id')
                ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                ->where('m.nom', '=',$filterMetiers )
                ->paginate(16);
        } elseif ((($filterMetiers != null) OR ($filterMetiers != '#')) AND ($filterVille != null)) {

            $filterArtisans = DB::table('artisans as a')
                ->select('a.*', 'c.libelle as ville')
                ->join('communes as c', 'c.id', '=', 'a.commune_id')
                ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                ->where('c.libelle', '=', $filterVille)
                ->paginate(16);
        } elseif ((($filterMetiers != null) OR ($filterMetiers != '#')) AND ($filterVille != null)) {

            $filterArtisans = DB::table('artisans')
                ->select('a.*', 'c.libelle as ville')
                ->join('communes as c', 'c.id', '=', 'a.commune_id')
                ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                ->where('c.libelle', '=', $filterVille)
                ->where('m.nom', '=', $filterMetiers)
                ->paginate(16);
        }


//          GET ALL DATA FOR COMMUNES TABLE FROM GOUV
//
//        $unwanted_array = array('Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
//            'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
//            'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
//            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
//            'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', ' ' => '%20');
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
//            if (isset($data[0]->centre->coordinates[1])) {
//                $post->latitude = $data[0]->centre->coordinates[1];
//            }
//            if (isset($data[0]->centre->coordinates[0])) {
//                $post->longitude = $data[0]->centre->coordinates[0];
//            }
//            $post->save();
//        }


// Récuperation de toutes les localisations en fonction du nom et du département de chaque ville
//        $count = 1;
//        $unwanted_spaces = array(' ' => '%20');
//
//        $data = DB::table('communes')
//            ->select('*')
//            ->where('updated_at', '=', 'inexistants')
//            ->get();

//        $link = [];
//        foreach ($data as $d) {
//            $link[] = "https://geo.api.gouv.fr/communes?nom=" . strtr($d->libelle, $unwanted_array) . "&departement=" . $d->departement . "&fields=nom,centre,departement";
//        }


//        foreach ($data as $d) {
//            $link = json_decode(file_get_contents("https://geo.api.gouv.fr/communes?nom=" . strtr($d->libelle, $unwanted_array) . "&departement=" . $d->departement . "&fields=nom,centre,departement"));
//            foreach ($link as $l) {
//                if ($l->departement->code == $d->departement) {
//                    if (strtr($l->nom, $unwanted_array) == strtr($d->libelle, $unwanted_array)) {
//                        $lat = $l->centre->coordinates[1];
//                        $lon = $l->centre->coordinates[0];
//                        DB::update("UPDATE communes SET latitude = ?, longitude = ?, updated_at = 'good?' WHERE id = ?", [$lat, $lon, $d->id]);
//                    }
//                }
//            }
//        }

// exists? name_update_A perfect

//        $data = DB::table('communes')
//            ->select('*')
//            ->where('updated_at', '=', 'custom')
//            ->get();
//
//        foreach ($data as $d) {
//            $link = json_decode(file_get_contents("https://geo.api.gouv.fr/communes?nom=" . strtr($d->libelle, $unwanted_array) . "&departement=" . $d->departement . "&fields=nom,centre,departement"));
//            if (sizeof($link) !== 1) {
//                DB::update("UPDATE communes SET updated_at = 'old' where id = ?", [$d->id]);
//            }
//        }


//        $data = DB::table('communes')
//            ->select('*')
//            ->where('updated_at', '=', 'custom')
//            ->get();
//
//        foreach ($data as $d) {
//            $link = json_decode(file_get_contents("https://geo.api.gouv.fr/communes?nom=" . strtr($d->libelle, $unwanted_array) . "&departement=" . $d->departement . "&fields=nom,centre,departement"));
//            if (sizeof($link) === 1) {
//                DB::update("UPDATE communes SET libelle = ?, updated_at = 'name_update_1' where id = ?", [$link[0]->nom, $d->id]);
//            }
//        }


        // Return tous si $id = 0
        if ($id == 0) {
            return view('listing-artisan', compact('filterArtisans', 'domaines', 'nbArtisans', 'page', 'filterRadius', 'artisanID', 'artisans', 'metiers', 'randMetiers', 'communes', 'filterMetiers', 'filterVille', 'specialites', 'certifications'));
        } else {
            // Sinon page détail artisan
            return view('fiche-artisan', compact('domaines', 'allArtisans', 'nbArtisans', 'page', 'filterRadius', 'artisanID', 'artisans', 'metiers', 'randMetiers', 'communes', 'filterMetiers', 'filterVille', 'specialites', 'certifications'));
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
