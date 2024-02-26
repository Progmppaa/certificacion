<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'empresa',
        'rif',
        'direccion',
        'fecha_documento',
        'nro_hoja',
        'fecha_contrato',
        'nro_contrato',
        'n_registro_user',
        'tipo_aprov',
        'nro_aprov',
        'uso',
        'utm',
        'region_hidrogafica',
        'caudal',
        'extras',
        'user_id',
    ];
    
}