<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\memos;

class pagos extends Model
{
    protected $table = 'pagos';
    protected $primaryKey = 'id_pago';
    public $timestamps = false;

    protected $fillable = [
        'cod_pago',
        'monto_us',
        'id_memo',
    ];

    public function memo(){
        return $this->belongsTo(Memos::class, 'id_memo', 'id_memo');
    }
}
