<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Reservation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function storeLike($id)
  {
    Like::create([
      'shop_id' => $id,
      'user_id' => auth()->id(),
    ]);

    session()->flash('success', 'お気に入りに追加しました');

    return redirect()->back();
  }
  public function deleteLike($id)
  {
    $like = Like::where('shop_id', $id)->where('user_id', auth()->id())->first();
    $like->delete();

    session()->flash('success', '削除しました');

    return redirect()->back();
  }
}
