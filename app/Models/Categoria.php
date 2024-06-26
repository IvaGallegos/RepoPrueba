<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    use HasFactory;

    protected $table = 'categoria';

    protected $primaryKey = 'ID_Categoria';

    public $timestamps = false;
    
    protected $fillable=[
        'categoria',
        'Descripcion',
        'Estatus'
    ];

    protected $guarded = [

    ];
}
