<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('index', compact('shops'));
    }
    public function detail($id)
    {
        $shop = Shop::find($id);
        $today = date("Y-m-d");
        return view('detail', compact('shop','today'));

    }
}
