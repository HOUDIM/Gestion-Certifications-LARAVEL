<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    function certif ()
    {
        return $this->hasMany(Certif::class);
    }

    protected $fillable = [
        'nom',
       
       
        ];
}
