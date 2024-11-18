<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipescuela
 * 
 * @property int $idEscuela
 * @property string $nomEscuela
 * 
 * @property Collection|Comentario[] $comentarios
 *
 * @package App\Models
 */
class Tipescuela extends Model
{
	protected $table = 'tipescuela';
	protected $primaryKey = 'idEscuela';
	public $timestamps = false;

	protected $fillable = [
		'nomEscuela'
	];

	public function comentarios()
	{
		return $this->hasMany(Comentario::class, 'idEscuela');
	}
}
