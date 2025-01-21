<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\memos;

class clientes extends Model
{
    protected $table = 'clientes';

    protected $primaryKey = 'id_cliente';

    public $timestamps = false;

    protected $fillable = [
        'codigo_cliente',
        'razon_social',
        'nit_ci',
        'fecha_cre',
    ];

     public function memos(){
        return $this->hasMany(Memos::class, 'id_cliente', 'id_cliente');
    }
    
}
