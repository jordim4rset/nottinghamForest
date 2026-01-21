<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SingupRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function singupForm()
    {
        return view('auth.singup');
    }

    public function singup(SingupRequest $request):RedirectResponse
    {
        $user = new User();

        $user->username = $request->get('username');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        //$user->password = $request->get('password');
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('users.account');
    }

    public function loginForm()
    {
        if(Auth::viaRemember())
        {
            return redirect()->route('user.account', ['msg' => 'Bienvenido de nuevo']);
        }else if(Auth::check())
        {
            return redirect()->route('users.account');
        }else
        {
            return view('auth.login');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('users.account');
        }else
        {
            $error = 'Error al acceder a la aplicación';
            return view('auth.login', compact('error'));
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }

}
