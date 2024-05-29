<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';

    protected $primaryKey = 'ID_Cliente';

    public $timestamps = false;
    
    protected $fillable=[
        'nombre',
        'apellido',
        'correoElectronico',
        'contraseña',
        'telefono',
        'direccion',
        'ciudad',
        'estatus'
    ];

    protected $guarded = [

    ];
}
