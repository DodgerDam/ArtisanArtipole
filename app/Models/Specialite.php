<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Specialite
 * 
 * @property int $id
 * @property string|null $nom
 * 
 * @property Collection|Artisan[] $artisans
 * @property Collection|Travaux[] $travauxes
 *
 * @package App\Models
 */
class Specialite extends Model
{
	protected $table = 'specialites';
	public $timestamps = false;

	protected $fillable = [
		'nom'
	];

	public function artisans()
	{
		return $this->belongsToMany(Artisan::class, 'specialites_artisans', 'id_specialites', 'id_artisans')
					->withPivot('id');
	}

	public function travauxes()
	{
		return $this->belongsToMany(Travaux::class, 'specialites_travaux', 'id_specialites', 'id_travaux')
					->withPivot('id');
	}
}
