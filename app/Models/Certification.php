<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Certification
 * 
 * @property int $id
 * @property string|null $nom
 * @property string|null $logo_certif
 * 
 * @property Collection|CertifArtisan[] $certif_artisans
 *
 * @package App\Models
 */
class Certification extends Model
{
	protected $table = 'certifications';
	public $timestamps = false;

	protected $fillable = [
		'nom',
		'logo_certif'
	];

	public function certif_artisans()
	{
		return $this->hasMany(CertifArtisan::class, 'id_certifications');
	}
}
