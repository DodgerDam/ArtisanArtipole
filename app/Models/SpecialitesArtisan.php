<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecialitesArtisan
 * 
 * @property int $id
 * @property int $id_specialites
 * @property int $id_artisans
 * 
 * @property Specialite $specialite
 * @property Artisan $artisan
 *
 * @package App\Models
 */
class SpecialitesArtisan extends Model
{
	protected $table = 'specialites_artisans';
	public $timestamps = false;

	protected $casts = [
		'id_specialites' => 'int',
		'id_artisans' => 'int'
	];

	protected $fillable = [
		'id_specialites',
		'id_artisans'
	];

	public function specialite()
	{
		return $this->belongsTo(Specialite::class, 'id_specialites');
	}

	public function artisan()
	{
		return $this->belongsTo(Artisan::class, 'id_artisans');
	}
}
