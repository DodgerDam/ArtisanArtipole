<?php

namespace App\Http\Controllers;

use App\Models\adherents;
use App\Models\Commune;
use App\Models\Communes;
use App\Models\Metiers;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ListingController extends Controller
{
    public function show($id, Request $request)
    {

        $requestVille = $request->ville;
        $requestRadius = $request->radius;
        $requestCode = $request->code;
        $requestMetier = $request->metiers;

        // Selection de toutes les données de métiers et de leurs photos
        $randMetiers = DB::table('metiers')
            ->join('photos_metiers', 'metiers.id', '=', 'photos_metiers.id_metiers')
            ->join('photos', 'photos.id', '=', 'photos_metiers.id_photos')
            ->select('metiers.*', 'photos.data')
            ->orderBy(DB::raw('RAND()'))
            ->get();

        // Selection de toutes les données d'adherents avec pagination par groupe de 16
        $adherents = DB::table('adherents')
            ->select('*')
            ->paginate(16);

        // Nombre d'adherents
        $nbadherents = DB::table('adherents')
            ->count();

        // Selection de toutes les données d'adherents
        $alladherents = DB::table('adherents')
            ->select('*')
            ->get();

        // Selection des domaines triés par adherents
        $domaines = DB::table('metiers')
            ->join('metiers_adherents', 'metiers_adherents.id_metiers', '=', 'metiers.id')
            ->join('adherents', 'adherents.id', '=', 'metiers_adherents.id_adherents')
            ->select('metiers.id as metID', 'metiers_adherents.id_adherents as metArIDAr', 'metiers.libelle as metNom', 'metiers.id as metId', 'metiers_adherents.id_metiers as metArIdMe', 'adherents.id as artID', 'id_adherents')
            ->get();

        // Selection de toutes les données de métiers
        $metiers = DB::table('metiers')
            ->select('*')
            ->get();

        // Selection de toutes les spécialités
        $categories = DB::table('categories')
            ->join('adherent_categorie', 'adherent_categorie.id_categorie', '=', 'categories.id')
            ->join('adherents', 'adherent_categorie.id_adherent', '=', 'adherents.id')
            ->select('categories.id as catID', 'adherent_categorie.id_adherent as catArID', 'categories.libelle as catNom')
            ->get();

        // Selection de toutes les certifications des adherents
        $certifications = DB::table('certifications')
            ->join('certif_adherents', 'certif_adherents.id_certifications', '=', 'certifications.id')
            ->join('adherents', 'certif_adherents.id_adherents', '=', 'adherents.id')
            ->select('certifications.id as certID', 'certif_adherents.id_adherents as certArID', 'certifications.libelle as certNom')
            ->get();

        // Liste des communes e
        $communes = DB::table('communes')
            ->select('*')
            ->get();

        // Id de l'artisan pour les infos personnelles
        $artisanID = $id;

        //Radius du filtre de base
        $filterRadius = -1;

        // Filtre métiers
        $filterMetiers = $request->metiers;
        $filterVille = $request->ville;

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
        // Récuperation de la p
        $posVille = DB::table('communes as c')
            ->select('*')
            ->where('libelle', '=', $request->ville)
            ->get();

        // Filtre de recherche
        if ((($filterMetiers == null) or ($filterMetiers == '#')) and ($filterVille == null)) {
            $filterAdherents = DB::table('adherents as a')
                ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                ->join('communes as c', 'c.id', '=', 'a.id_commune')
                ->join('metiers_adherents as ma', 'ma.id_adherents', '=', 'a.id')
                ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                ->paginate(16);
        } elseif ((($filterMetiers != null) or ($filterMetiers != '#')) and ($filterVille == null)) {
            $filterAdherents = DB::table('adherents as a')
                ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                ->join('communes as c', 'c.id', '=', 'a.id_commune')
                ->join('metiers_adherents as ma', 'ma.id_adherents', '=', 'a.id')
                ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                ->where('m.libelle', '=', $filterMetiers)
                ->paginate(16);
        } elseif ((($filterMetiers == null) or ($filterMetiers == '#')) and ($filterVille != null)) {
            if ($filterRadius == -1) {
                $filterAdherents = DB::table('adherents as a')
                    ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                    ->join('communes as c', 'c.id', '=', 'a.id_commune')
                    ->join('metiers_adherents as ma', 'ma.id_adherents', '=', 'a.id')
                    ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                    ->where('c.libelle', '=', $filterVille)
                    ->paginate(16);
            } else {
                $filterAdherents = DB::table('adherents as a')
                    ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                    ->join('communes as c', 'c.id', '=', 'a.id_commune')
                    ->join('metiers_adherents as ma', 'ma.id_adherents', '=', 'a.id')
                    ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                    ->get();
                $this->distanceCalculator($filterAdherents, $posVille[0], $filterRadius);
                $filterAdherents = $this->paginate($filterAdherents, 16);
            }
        } elseif ((($filterMetiers != null) or ($filterMetiers != '#')) and ($filterVille != null)) {
            if ($filterRadius == -1) {
                $filterAdherents = DB::table('adherents as a')
                    ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                    ->join('communes as c', 'c.id', '=', 'a.id_commune')
                    ->join('metiers_adherents as ma', 'ma.id_adherents', '=', 'a.id')
                    ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                    ->where('c.libelle', '=', $filterVille)
                    ->where('m.libelle', '=', $filterMetiers)
                    ->paginate(16);
            } else {
                $filterAdherents = DB::table('adherents as a')
                    ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                    ->join('communes as c', 'c.id', '=', 'a.id_commune')
                    ->join('metiers_adherents as ma', 'ma.id_adherents', '=', 'a.id')
                    ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                    ->where('m.libelle', '=', $filterMetiers)
                    ->get();
                $this->distanceCalculator($filterAdherents, $posVille[0], $filterRadius);
                $filterAdherents = $this->paginate($filterAdherents, 16);
            }
        }

        // Return tous si $id = 0
        if ($id == 0) {
            return view('listing-artisan', compact('requestVille', 'requestRadius', 'requestCode', 'requestMetier', 'filterAdherents', 'domaines', 'nbadherents', 'page', 'filterRadius', 'artisanID', 'adherents', 'metiers', 'randMetiers', 'communes', 'filterMetiers', 'filterVille', 'categories', 'certifications'));
        } else {
            // Sinon page détail artisan
            return view('fiche-artisan', compact('domaines', 'alladherents', 'nbadherents', 'page', 'filterRadius', 'artisanID', 'adherents', 'metiers', 'randMetiers', 'communes', 'filterMetiers', 'filterVille', 'categories', 'certifications'));
        }
    }


    public
    function json()
    {
        $adherents = DB::table('adherents')->select('*')
            ->get();
        return json_encode($adherents);
    }

    /**
     * @param \Illuminate\Support\Collection $filteradherents
     * @param $posVille
     * @param mixed $filterRadius
     * @return void
     */
    public function distanceCalculator(\Illuminate\Support\Collection $filteradherents, $posVille, mixed $filterRadius): void
    {
        // Fonction qui calcule la distance entre tel et telle donnée, et qui renvoie si vrai ou faux est dans le rayon donné
        $cntDistanceCalculator = 0;
        foreach ($filteradherents as $artisan) {
            $cible = [$artisan->latitude, $artisan->longitude];
            $center = [$posVille->latitude, $posVille->longitude];
            $latDiff = ($center[0] - $cible[0]) * (pi() / 180);
            $lonDiff = ($center[1] - $cible[1]) * (pi() / 180);
            $geoLatFrom = $center[0] * (pi() / 180);
            $geoLatTo = $center[1] * (pi() / 180);
            $distance = 2 * 6371 * sin(sqrt(sin($latDiff / 2) * sin($latDiff / 2) + cos($geoLatFrom) * cos($geoLatTo) * sin($lonDiff / 2) * sin($lonDiff / 2)));
            if ($distance > $filterRadius) {
                unset($filteradherents[$cntDistanceCalculator]);
            }
            $cntDistanceCalculator++;
        }
    }

    /**
     * Gera a paginação dos itens de um array ou collection.
     *
     * @param array|Collection $items
     * @param int $perPage
     * @param int $page
     * @param array $options
     *
     * @return LengthAwarePaginator
     */
    public function paginate($items, $perPage = 16, $page = null, $options = []): LengthAwarePaginator
    {
        // Fonction pour la pagination lors d'un tri via le filtre
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}
