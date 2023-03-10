<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @return View
     *
     */
    public function showLogin()
    {
        return view('login.login_form');
    }

    /**
     * @param App\Http\Request\LoginFormRequest
     */
    public function login(LoginFormRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect('home')->with('login_success', 'login is success');
        }

        return back()->withErrors([
            'login_error' => 'mailaddress is incorrect'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('showLogin')->with('logout', 'ログアウトしました');
    }

}
