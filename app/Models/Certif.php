<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Certif extends Model
{
    use HasFactory;


    function comments(){
        return $this->hasMany(Comments::class);
    }

    function category(){
        return $this->belongsTo(Category::class);
    }

    protected $table = 'certifs';

    public $timestamps = true;
    protected $fillable = [
    'title',
    'description',
    'image',
    'category_id',
    
   
    ];
}
