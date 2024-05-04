<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
}


    /**
     * Devuelve un string recortado la descripcion
     * @param boolean $a : Si es FALSE devuelve la primera parte de la descipcion (corta) si es TRUE devuelve la descripcion larga
     * @return string descripcion formateada
     */
    // public function formatearDescript($a = FALSE) :string{

    //     $text = $this->descript;
    //     $descript = explode(';', $text);
    //     if (!$a) {
    //         return $descript[0];
    //     } else {
    //         return $descript[1];
    //     }
    // }