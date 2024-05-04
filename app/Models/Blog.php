<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    /**
     * Devuelve un el blog recortado a 50 palabras.
     * @return string descripcion formateada
     */
    public function formatearBlog() :string {

        return implode(' ', array_slice(explode(' ', $this->blog) , 0,50)) . '...';

    }
}

