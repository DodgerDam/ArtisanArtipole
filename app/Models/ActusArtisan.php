<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ActusArtisan
 * 
 * @property int $id
 * @property int $id_actus
 * @property int $id_artisans
 * 
 * @property Actu $actu
 * @property Artisan $artisan
 *
 * @package App\Models
 */
class ActusArtisan extends Model
{
	protected $table = 'actus_artisans';
	public $timestamps = false;

	protected $casts = [
		'id_actus' => 'int',
		'id_artisans' => 'int'
	];

	protected $fillable = [
		'id_actus',
		'id_artisans'
	];

	public function actu()
	{
		return $this->belongsTo(Actu::class, 'id_actus');
	}

	public function artisan()
	{
		return $this->belongsTo(Artisan::class, 'id_artisans');
	}
}
