<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotosInspiration
 * 
 * @property int $id
 * @property int $id_photos
 * @property int $id_metiers
 * @property int|null $position
 * @property int|null $pages
 * @property string|null $legende
 * 
 * @property Photo $photo
 * @property Metier $metier
 *
 * @package App\Models
 */
class PhotosInspiration extends Model
{
	protected $table = 'photos_inspirations';
	public $timestamps = false;

	protected $casts = [
		'id_photos' => 'int',
		'id_metiers' => 'int',
		'position' => 'int',
		'pages' => 'int'
	];

	protected $fillable = [
		'id_photos',
		'id_metiers',
		'position',
		'pages',
		'legende'
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
