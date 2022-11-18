<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Artisan
 * 
 * @property int $id
 * @property string|null $num_adhÃ©rent
 * @property int $id_photo_artisan
 * @property string|null $nom
 * @property string|null $adresse
 * @property string|null $code_postal
 * @property string|null $ville
 * @property string|null $mail
 * @property string|null $telephone
 * @property string|null $site
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $linkedin
 * @property string|null $description_activite
 * @property string|null $description_entreprise
 * @property string|null $logo
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $horaire_jours
 * @property string|null $horaires
 * 
 * @property Photo $photo
 * @property Collection|Actu[] $actus
 * @property Collection|CertifArtisan[] $certif_artisans
 * @property Collection|Metier[] $metiers
 * @property Collection|PhotosRealisation[] $photos_realisations
 * @property Collection|Specialite[] $specialites
 *
 * @package App\Models
 */
class Artisan extends Model
{
	protected $table = 'artisans';
	public $timestamps = false;

	protected $casts = [
		'id_photo_artisan' => 'int'
	];

	protected $fillable = [
		'num_adhÃ©rent',
		'id_photo_artisan',
		'nom',
		'adresse',
		'code_postal',
		'ville',
		'mail',
		'telephone',
		'site',
		'facebook',
		'instagram',
		'linkedin',
		'description_activite',
		'description_entreprise',
		'logo',
		'latitude',
		'longitude',
		'horaire_jours',
		'horaires'
	];

	public function photo()
	{
		return $this->belongsTo(Photo::class, 'id_photo_artisan');
	}

	public function actus()
	{
		return $this->belongsToMany(Actu::class, 'actus_artisans', 'id_artisans', 'id_actus')
					->withPivot('id');
	}

	public function certif_artisans()
	{
		return $this->hasMany(CertifArtisan::class, 'id_artisans');
	}

	public function metiers()
	{
		return $this->belongsToMany(Metier::class, 'metiers_artisans', 'id_artisans', 'id_metiers')
					->withPivot('id');
	}

	public function photos_realisations()
	{
		return $this->hasMany(PhotosRealisation::class, 'id_artisans');
	}

	public function specialites()
	{
		return $this->belongsToMany(Specialite::class, 'specialites_artisans', 'id_artisans', 'id_specialites')
					->withPivot('id');
	}
}
