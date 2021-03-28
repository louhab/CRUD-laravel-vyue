<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;

class Produits extends Model
{
    protected $fillable = [
        'name','category_id'
    ];
    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
