<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotosRealisation
 * 
 * @property int $id
 * @property int $id_photos
 * @property int $id_artisans
 * @property int|null $position
 * @property string|null $legende
 * 
 * @property Photo $photo
 * @property Artisan $artisan
 *
 * @package App\Models
 */
class PhotosRealisation extends Model
{
	protected $table = 'photos_realisations';
	public $timestamps = false;

	protected $casts = [
		'id_photos' => 'int',
		'id_artisans' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'id_photos',
		'id_artisans',
		'position',
		'legende'
	];

	public function photo()
	{
		return $this->belongsTo(Photo::class, 'id_photos');
	}

	public function artisan()
	{
		return $this->belongsTo(Artisan::class, 'id_artisans');
	}
}
