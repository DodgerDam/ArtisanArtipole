<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotosActu
 * 
 * @property int $id
 * @property int $id_photos
 * @property int $id_actus
 * @property int|null $type
 * 
 * @property Photo $photo
 * @property Actu $actu
 *
 * @package App\Models
 */
class PhotosActu extends Model
{
	protected $table = 'photos_actus';
	public $timestamps = false;

	protected $casts = [
		'id_photos' => 'int',
		'id_actus' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'id_photos',
		'id_actus',
		'type'
	];

	public function photo()
	{
		return $this->belongsTo(Photo::class, 'id_photos');
	}

	public function actu()
	{
		return $this->belongsTo(Actu::class, 'id_actus');
	}
}
