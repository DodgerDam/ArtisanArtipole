<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MetiersArtisan
 * 
 * @property int $id
 * @property int $id_metiers
 * @property int $id_artisans
 * 
 * @property Metier $metier
 * @property Artisan $artisan
 *
 * @package App\Models
 */
class MetiersArtisan extends Model
{
	protected $table = 'metiers_artisans';
	public $timestamps = false;

	protected $casts = [
		'id_metiers' => 'int',
		'id_artisans' => 'int'
	];

	protected $fillable = [
		'id_metiers',
		'id_artisans'
	];

	public function metier()
	{
		return $this->belongsTo(Metier::class, 'id_metiers');
	}

	public function artisan()
	{
		return $this->belongsTo(Artisan::class, 'id_artisans');
	}
}
