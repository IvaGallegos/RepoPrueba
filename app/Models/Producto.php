<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    use HasFactory;

    protected $table = 'producto';

    protected $primaryKey = 'ID_Producto';

    public $timestamps = false;
    
    protected $fillable = [
        'Nombre',
        'Codigo',
        'Stock',
        'Descripcion',
        'imagen',
        'Estado',
        'Categoria_ID'
    ];

    protected $guarded = [

    ];
}
