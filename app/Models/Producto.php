<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id
 * @property string $name
 * @property string $descript
 * @property string $image
 * @property string $altImage
 * @property string $category
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto query()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereAltImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereDescript($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'descript', 'image', 'altImage','category','price'];

    /**
     * formatea el precio para que se muestre de manera correcta
     */
    protected function price() : Attribute {

        return Attribute::make(
            get: fn ($price) => $price / 100,
            set: fn ($price) => $price * 100,
        );
    }

    protected function descript () : Attribute {

        return Attribute::make(
            get: fn ($descript) => explode(';', $descript),
            set: fn ($descript) => implode(';', $descript),
        );
    }
}
