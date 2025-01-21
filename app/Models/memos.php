<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes;
use App\Models\siniestros;

class memos extends Model
{
    
    protected $table = 'memos';

    
    protected $primaryKey = 'id_memo';

    
    public $timestamps = false;

    
    protected $fillable = [
        'nro_memo',
        'poliza',
        'id_cliente',
        'prima_total',
        'vigencia_desde',
    ];
    public function pagos(){
        return $this->hasMany(Pagos::class, 'id_memo', 'id_memo');
    }

    
    
    public function cliente(){
        return $this->belongsTo(Clientes::class, 'id_cliente', 'id_cliente');
    }

    public function siniestros(){
        return $this->hasMany(Siniestros::class, 'id_memo', 'id_memo');
    }
}
