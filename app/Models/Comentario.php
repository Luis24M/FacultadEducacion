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
	protected $table = 'comentarios';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'apellido',
		'correo',
		'asunto',
		'mensaje',
		'escuela',
	];
}
