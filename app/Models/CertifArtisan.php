<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CertifArtisan
 * 
 * @property int $id
 * @property int $id_certifications
 * @property int $id_artisans
 * 
 * @property Certification $certification
 * @property Artisan $artisan
 *
 * @package App\Models
 */
class CertifArtisan extends Model
{
	protected $table = 'certif_artisans';
	public $timestamps = false;

	protected $casts = [
		'id_certifications' => 'int',
		'id_artisans' => 'int'
	];

	protected $fillable = [
		'id_certifications',
		'id_artisans'
	];

	public function certification()
	{
		return $this->belongsTo(Certification::class, 'id_certifications');
	}

	public function artisan()
	{
		return $this->belongsTo(Artisan::class, 'id_artisans');
	}
}
