<?php

/**
 * Created by Reliese Model.
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Importa el modelo User

class Publicacion extends Model
{
    protected $table = 'publicacion'; // Tu tabla personalizada
    protected $primaryKey = 'idPublicacion'; // Clave primaria
    public $timestamps = false;

    protected $fillable = [
        'nombrePublicacion',
        'desPublicacion',
        'fechaPublicacion',
        'imgPublicacion',
        'idUsuario', 
        'idTipoPublicacion'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUsuario', 'id'); // Relación con el modelo User
    }

    public function tipopublicacion()
    {
        return $this->belongsTo(Tipopublicacion::class, 'idTipoPublicacion');
    }
}
