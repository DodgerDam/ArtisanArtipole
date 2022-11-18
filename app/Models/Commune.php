<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Commune
 * 
 * @property int $id
 * @property string $libelle
 * @property string|null $departement
 * @property string|null $code_postal
 *
 * @package App\Models
 */
class Commune extends Model
{
	protected $table = 'communes';
	public $timestamps = false;

	protected $fillable = [
		'libelle',
		'departement',
		'code_postal'
	];
}
