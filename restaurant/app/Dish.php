<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Main;

class Dish extends Model
{
    protected $fillable = ['title', 'description', 'image', 'price', 'main_id'];

    public function menu(){
        return $this->belongsTo(Main::class, 'main_id');
    }

    
}
