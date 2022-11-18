<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotosSlide
 * 
 * @property int $id
 * @property int $id_photos
 * @property int $position
 * 
 * @property Photo $photo
 *
 * @package App\Models
 */
class PhotosSlide extends Model
{
	protected $table = 'photos_slides';
	public $timestamps = false;

	protected $casts = [
		'id_photos' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'id_photos',
		'position'
	];

	public function photo()
	{
		return $this->belongsTo(Photo::class, 'id_photos');
	}
}
