<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function account():View
    {

    $user = Auth::user();
        return view('users.account', compact('user'));
    }
}
