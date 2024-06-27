<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['name','area_id','genre_id','overview','image_url'];

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function likes()
    {
    return $this->hasMany(Like::class, 'id');
    }

    public function reservation()
    {
    return $this->hasMany(reservation::class, 'reservation_id');
    }
    public function is_liked_by_auth_user()
    {
    $id = auth()->id();

    $likers = array();
    foreach($this->likes as $like) {
      array_push($likers, $like->user_id);
    }

    if (in_array($id, $likers)) {
      return true;
    } else {
      return false;
    }
    }
}
