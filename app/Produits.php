<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cqtegories;

class Produits extends Model
{
    protected $fillable = [
        'name','category_id'
    ];
    public function category(){
        return $this->belongsTo(Cqtegories::class);
    }
}
