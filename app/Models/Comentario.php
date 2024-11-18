<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comentario
 * 
 * @property int $id
 * @property string $nombre
 * @property string $correo
 * @property string $asunto
 * @property string $mensaje
 * @property int $idEscuela
 * @property int $idUsuario
 * 
 * @property Tipescuela $tipescuela
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Comentario extends Model
{
	protected $table = 'comentario';
	public $timestamps = false;

	protected $casts = [
		'idEscuela' => 'int',
		'idUsuario' => 'int'
	];

	protected $fillable = [
		'nombre',
		'correo',
		'asunto',
		'mensaje',
		'idEscuela',
		'idUsuario'
	];

	public function tipescuela()
	{
		return $this->belongsTo(Tipescuela::class, 'idEscuela');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'idUsuario');
	}
}
