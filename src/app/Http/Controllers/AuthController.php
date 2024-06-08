<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $member = $request->onry(['name','email','password']);
        User::create($member);
        return view ('thanks');
    }

    public function index()
    {
        $shops = Shop::all();
        return view('index', compact('shops'));
    }
}
