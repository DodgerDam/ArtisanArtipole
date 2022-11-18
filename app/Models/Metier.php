<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Metier
 * 
 * @property int $id
 * @property string|null $nom
 * @property string|null $description_accueil
 * 
 * @property Collection|Artisan[] $artisans
 * @property Collection|PhotosInspiration[] $photos_inspirations
 * @property Collection|Photo[] $photos
 *
 * @package App\Models
 */
class Metier extends Model
{
	protected $table = 'metiers';
	public $timestamps = false;

	protected $fillable = [
		'nom',
		'description_accueil'
	];

	public function artisans()
	{
		return $this->belongsToMany(Artisan::class, 'metiers_artisans', 'id_metiers', 'id_artisans')
					->withPivot('id');
	}

	public function photos_inspirations()
	{
		return $this->hasMany(PhotosInspiration::class, 'id_metiers');
	}

	public function photos()
	{
		return $this->belongsToMany(Photo::class, 'photos_metiers', 'id_metiers', 'id_photos')
					->withPivot('id', 'type');
	}
}
