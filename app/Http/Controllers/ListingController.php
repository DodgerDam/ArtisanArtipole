<?php

namespace App\Http\Controllers;

use App\Models\Artisans;
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
            ->select('metiers.*', 'photos.images')
            ->orderBy(DB::raw('RAND()'))
            ->get();

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

        // Selection des domaines triés par artisans
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
            $filterArtisans = DB::table('artisans as a')
                ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                ->join('communes as c', 'c.id', '=', 'a.commune_id')
                ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                ->paginate(16);
        } elseif ((($filterMetiers != null) or ($filterMetiers != '#')) and ($filterVille == null)) {
            $filterArtisans = DB::table('artisans as a')
                ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                ->join('communes as c', 'c.id', '=', 'a.commune_id')
                ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                ->where('m.nom', '=', $filterMetiers)
                ->paginate(16);
        } elseif ((($filterMetiers == null) or ($filterMetiers == '#')) and ($filterVille != null)) {
            if ($filterRadius == -1) {
                $filterArtisans = DB::table('artisans as a')
                    ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                    ->join('communes as c', 'c.id', '=', 'a.commune_id')
                    ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                    ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                    ->where('c.libelle', '=', $filterVille)
                    ->paginate(16);
            } else {
                $filterArtisans = DB::table('artisans as a')
                    ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                    ->join('communes as c', 'c.id', '=', 'a.commune_id')
                    ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                    ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                    ->get();
                $this->distanceCalculator($filterArtisans, $posVille[0], $filterRadius);
                $filterArtisans = $this->paginate($filterArtisans, 16);
            }
        } elseif ((($filterMetiers != null) or ($filterMetiers != '#')) and ($filterVille != null)) {
            if ($filterRadius == -1) {
                $filterArtisans = DB::table('artisans as a')
                    ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                    ->join('communes as c', 'c.id', '=', 'a.commune_id')
                    ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                    ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                    ->where('c.libelle', '=', $filterVille)
                    ->where('m.nom', '=', $filterMetiers)
                    ->paginate(16);
            } else {
                $filterArtisans = DB::table('artisans as a')
                    ->select('a.*', 'c.libelle as ville', 'c.latitude as latitude', 'c.longitude as longitude', 'c.code_postal as code_postal')
                    ->join('communes as c', 'c.id', '=', 'a.commune_id')
                    ->join('metiers_artisans as ma', 'ma.id_artisans', '=', 'a.id')
                    ->join('metiers as m', 'm.id', '=', 'ma.id_metiers')
                    ->where('m.nom', '=', $filterMetiers)
                    ->get();
                $this->distanceCalculator($filterArtisans, $posVille[0], $filterRadius);
                $filterArtisans = $this->paginate($filterArtisans, 16);
            }
        }

        // Return tous si $id = 0
        if ($id == 0) {
            return view('listing-artisan', compact('requestVille', 'requestRadius', 'requestCode', 'requestMetier', 'filterArtisans', 'domaines', 'nbArtisans', 'page', 'filterRadius', 'artisanID', 'artisans', 'metiers', 'randMetiers', 'communes', 'filterMetiers', 'filterVille', 'specialites', 'certifications'));
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

    /**
     * @param \Illuminate\Support\Collection $filterArtisans
     * @param $posVille
     * @param mixed $filterRadius
     * @return void
     */
    public function distanceCalculator(\Illuminate\Support\Collection $filterArtisans, $posVille, mixed $filterRadius): void
    {
        // Fonction qui calcule la distance entre tel et telle donnée, et qui renvoie si vrai ou faux est dans le rayon donné
        $cntDistanceCalculator = 0;
        foreach ($filterArtisans as $artisan) {
            $cible = [$artisan->latitude, $artisan->longitude];
            $center = [$posVille->latitude, $posVille->longitude];
            $latDiff = ($center[0] - $cible[0]) * (pi() / 180);
            $lonDiff = ($center[1] - $cible[1]) * (pi() / 180);
            $geoLatFrom = $center[0] * (pi() / 180);
            $geoLatTo = $center[1] * (pi() / 180);
            $distance = 2 * 6371 * sin(sqrt(sin($latDiff / 2) * sin($latDiff / 2) + cos($geoLatFrom) * cos($geoLatTo) * sin($lonDiff / 2) * sin($lonDiff / 2)));
            if ($distance > $filterRadius) {
                unset($filterArtisans[$cntDistanceCalculator]);
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
