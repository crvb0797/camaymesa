<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;

    /* INVERSE RELATIONSHIP 1:N  */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*POLYMORPHIC RELATIONSHIP 1:1 */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
