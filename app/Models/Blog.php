<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $altImage
 * @property string $blog
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereAltImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereBlog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Blog extends Model
{
    use HasFactory;
    /**
     * Devuelve un el blog recortado a 50 palabras.
     * @return string descripcion formateada
     */
    public function fronNews() :string {

        return implode(' ', array_slice(explode(' ', $this->blog) , 0,50)) . '...';

    }

    public function formatNews() :string {

        return implode('<br>', array_slice(explode('.', $this->blog) , 0));

    }

}

