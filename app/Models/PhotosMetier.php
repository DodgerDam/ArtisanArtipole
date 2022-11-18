<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotosMetier
 * 
 * @property int $id
 * @property int $id_photos
 * @property int $id_metiers
 * @property int|null $type
 * 
 * @property Photo $photo
 * @property Metier $metier
 *
 * @package App\Models
 */
class PhotosMetier extends Model
{
	protected $table = 'photos_metiers';
	public $timestamps = false;

	protected $casts = [
		'id_photos' => 'int',
		'id_metiers' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'id_photos',
		'id_metiers',
		'type'
	];

	public function photo()
	{
		return $this->belongsTo(Photo::class, 'id_photos');
	}

	public function metier()
	{
		return $this->belongsTo(Metier::class, 'id_metiers');
	}
}
