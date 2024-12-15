<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipopublicacion
 * 
 * @property int $idTipo
 * @property string|null $nombreTipo
 * 
 * @property Collection|Publicacion[] $publicacions
 *
 * @package App\Models
 */
class Tipopublicacion extends Model
{
	protected $table = 'tipo_publicacion';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $fillable = [
		'nombreTipo'
	];

	public function publicacions()
	{
		return $this->hasMany(Publicacion::class, 'idTipoPublicacion');
	}
}
