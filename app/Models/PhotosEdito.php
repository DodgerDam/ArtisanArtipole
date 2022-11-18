<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotosEdito
 * 
 * @property int $id
 * @property int $id_photos
 * 
 * @property Photo $photo
 *
 * @package App\Models
 */
class PhotosEdito extends Model
{
	protected $table = 'photos_edito';
	public $timestamps = false;

	protected $casts = [
		'id_photos' => 'int'
	];

	protected $fillable = [
		'id_photos'
	];

	public function photo()
	{
		return $this->belongsTo(Photo::class, 'id_photos');
	}
}
