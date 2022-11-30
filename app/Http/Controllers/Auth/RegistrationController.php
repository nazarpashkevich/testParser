<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistationRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\View;

class RegistrationController extends Controller
{

    public function index(): View
    {
        $this->setTitle(trans('main.registration_title'));

        return view('auth.registration');
    }

    public function register(RegistationRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $data['password'] = \Hash::make($data['password']);
        $user = new User();
        $user->fill($data);
        $user->save();

        \Auth::login($user);
        if (\Auth::check()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return back()->withErrors(['all' => [trans('validation.something_wrong')]]);
    }
}
