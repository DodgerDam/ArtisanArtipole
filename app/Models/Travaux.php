<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Travaux
 * 
 * @property int $id
 * @property string|null $nom
 * 
 * @property Collection|Specialite[] $specialites
 *
 * @package App\Models
 */
class Travaux extends Model
{
	protected $table = 'travaux';
	public $timestamps = false;

	protected $fillable = [
		'nom'
	];

	public function specialites()
	{
		return $this->belongsToMany(Specialite::class, 'specialites_travaux', 'id_travaux', 'id_specialites')
					->withPivot('id');
	}
}
