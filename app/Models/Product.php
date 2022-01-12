<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];

    const BORRADOR = 1;
    const PUBLICADO = 2;


    /* INVERSE RELATIONSHIP 1:N  */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    /*POLYMORPHIC RELATIONSHIP 1:1 */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
