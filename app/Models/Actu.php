<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Actu
 * 
 * @property int $id
 * @property string|null $titre
 * @property string|null $contenu
 * @property int|null $type
 * @property int|null $position
 * @property Carbon|null $date_ajout
 * 
 * @property Collection|Artisan[] $artisans
 * @property Collection|Photo[] $photos
 *
 * @package App\Models
 */
class Actu extends Model
{
	protected $table = 'actus';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'position' => 'int'
	];

	protected $dates = [
		'date_ajout'
	];

	protected $fillable = [
		'titre',
		'contenu',
		'type',
		'position',
		'date_ajout'
	];

	public function artisans()
	{
		return $this->belongsToMany(Artisan::class, 'actus_artisans', 'id_actus', 'id_artisans')
					->withPivot('id');
	}

	public function photos()
	{
		return $this->belongsToMany(Photo::class, 'photos_actus', 'id_actus', 'id_photos')
					->withPivot('id', 'type');
	}
}
