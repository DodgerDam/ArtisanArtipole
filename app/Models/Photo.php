<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 * 
 * @property int $id
 * @property string $images
 * @property string|null $nom
 * 
 * @property Collection|Artisan[] $artisans
 * @property Collection|Actu[] $actus
 * @property Collection|PhotosEdito[] $photos_editos
 * @property Collection|PhotosInspiration[] $photos_inspirations
 * @property Collection|Metier[] $metiers
 * @property Collection|PhotosRealisation[] $photos_realisations
 * @property Collection|PhotosSlide[] $photos_slides
 *
 * @package App\Models
 */
class Photo extends Model
{
	protected $table = 'photos';
	public $timestamps = false;

	protected $fillable = [
		'images',
		'nom'
	];

	public function artisans()
	{
		return $this->hasMany(Artisan::class, 'id_photo_artisan');
	}

	public function actus()
	{
		return $this->belongsToMany(Actu::class, 'photos_actus', 'id_photos', 'id_actus')
					->withPivot('id', 'type');
	}

	public function photos_editos()
	{
		return $this->hasMany(PhotosEdito::class, 'id_photos');
	}

	public function photos_inspirations()
	{
		return $this->hasMany(PhotosInspiration::class, 'id_photos');
	}

	public function metiers()
	{
		return $this->belongsToMany(Metier::class, 'photos_metiers', 'id_photos', 'id_metiers')
					->withPivot('id', 'type');
	}

	public function photos_realisations()
	{
		return $this->hasMany(PhotosRealisation::class, 'id_photos');
	}

	public function photos_slides()
	{
		return $this->hasMany(PhotosSlide::class, 'id_photos');
	}
}
