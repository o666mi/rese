<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['name','area_id','genre_id','overview','image_url'];

    public function areas()
        {
            return $this->hasMany('App\Models\Area');
        }

    public function genres()
        {
            return $this->hasMany('App\Models\Genre');
        }
}
