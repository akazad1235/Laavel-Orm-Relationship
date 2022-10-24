<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class spellCheckController extends Controller
{
    public function oneToOne(){
        $users =  User::with('phones')->get();
        return view('pages.oneToOne.index', ['users' => $users]);
    }
}
