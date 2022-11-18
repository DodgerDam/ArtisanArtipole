<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fournisseur
 * 
 * @property int $id
 * @property string|null $nom
 * @property string|null $logo
 * @property bool|null $affichage
 *
 * @package App\Models
 */
class Fournisseur extends Model
{
	protected $table = 'fournisseurs';
	public $timestamps = false;

	protected $casts = [
		'affichage' => 'bool'
	];

	protected $fillable = [
		'nom',
		'logo',
		'affichage'
	];
}
