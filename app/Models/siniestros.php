<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\memos;

class siniestros extends Model
{
     
     protected $table = 'siniestros';

     
     protected $primaryKey = 'id_siniestro';
 
     
     public $timestamps = false;
 
     
     protected $fillable = [
         'nro_siniestro',
         'id_memo',
         'fecha_sin',
         'descripcion',
     ];
 
     
     public function memo(){
         return $this->belongsTo(Memos::class, 'id_memo', 'id_memo');
     }
     
}
