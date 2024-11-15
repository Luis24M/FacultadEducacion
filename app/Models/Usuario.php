<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $idUsuario
 * @property string $correo
 * @property string $contraseña
 * @property string $nombre
 * @property string $apePaterno
 * @property string $apeMaterno
 * @property bool|null $isAdmin
 * 
 * @property Collection|Comentario[] $comentarios
 * @property Collection|Publicacion[] $publicacions
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'idUsuario';
	public $timestamps = false;

	protected $casts = [
		'isAdmin' => 'bool'
	];

	protected $fillable = [
		'correo',
		'contraseña',
		'nombre',
		'apePaterno',
		'apeMaterno',
		'isAdmin'
	];

	public function comentarios()
	{
		return $this->hasMany(Comentario::class, 'idUsuario');
	}

	public function publicacions()
	{
		return $this->hasMany(Publicacion::class, 'idUsuario');
	}
}
