<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecialitesTravaux
 * 
 * @property int $id
 * @property int $id_specialites
 * @property int $id_travaux
 * 
 * @property Specialite $specialite
 * @property Travaux $travaux
 *
 * @package App\Models
 */
class SpecialitesTravaux extends Model
{
	protected $table = 'specialites_travaux';
	public $timestamps = false;

	protected $casts = [
		'id_specialites' => 'int',
		'id_travaux' => 'int'
	];

	protected $fillable = [
		'id_specialites',
		'id_travaux'
	];

	public function specialite()
	{
		return $this->belongsTo(Specialite::class, 'id_specialites');
	}

	public function travaux()
	{
		return $this->belongsTo(Travaux::class, 'id_travaux');
	}
}
