<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chiffre
 * 
 * @property int $compteur_artisans_artipole
 * @property int $compteur_fournisseur
 *
 * @package App\Models
 */
class Chiffre extends Model
{
	protected $table = 'chiffres';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'compteur_artisans_artipole' => 'int',
		'compteur_fournisseur' => 'int'
	];

	protected $fillable = [
		'compteur_artisans_artipole',
		'compteur_fournisseur'
	];
}
