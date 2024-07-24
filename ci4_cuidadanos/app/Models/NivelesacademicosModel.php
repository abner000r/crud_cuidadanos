<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelesacademicosModel extends Model
{
    protected $table         = 'nivelesacademicos';
    protected $allowedFields = [
        'cod_nivel_acad', 'nombre', 'descripcion',
    ];
    
}