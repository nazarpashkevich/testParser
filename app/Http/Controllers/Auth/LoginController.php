<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        $this->setTitle(trans('main.login_title'));

        return view('auth.login');
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return back()->withErrors(['all' => [trans('auth.failed')]]);
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        \Auth::logout();

        return redirect(route('auth.login'));
    }

}
