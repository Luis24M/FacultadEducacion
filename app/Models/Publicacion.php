<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Publicacion
 * 
 * @property int $idPublicacion
 * @property string|null $nombrePublicacion
 * @property string|null $desPublicacion
 * @property Carbon|null $fechaPublicacion
 * @property string|null $imgPublicacion
 * @property int|null $idUsuario
 * @property int|null $idTipoPublicacion
 * 
 * @property Usuario|null $usuario
 * @property Tipopublicacion|null $tipopublicacion
 *
 * @package App\Models
 */
class Publicacion extends Model
{
	protected $table = 'publicacion';
	protected $primaryKey = 'idPublicacion';
	public $timestamps = false;

	protected $casts = [
		'fechaPublicacion' => 'datetime',
		'idUsuario' => 'int',
		'idTipoPublicacion' => 'int'
	];

	protected $fillable = [
		'nombrePublicacion',
		'desPublicacion',
		'fechaPublicacion',
		'imgPublicacion',
		'idUsuario',
		'idTipoPublicacion'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'idUsuario');
	}

	public function tipopublicacion()
	{
		return $this->belongsTo(Tipopublicacion::class, 'idTipoPublicacion');
	}
}
