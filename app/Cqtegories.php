<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produits;

class Cqtegories extends Model
{

    protected $fillable = [
        'name',
    ];
    public function produits(){
        return $this->hasMany(Produits::class);
    }
}
