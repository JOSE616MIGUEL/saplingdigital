<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
     

        $user = new User();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = Bcrypt($request->post('password'));
        if($request->hasFile('image')){
            $image = $request->file('image');
            $url = 'img/usuario/';
            $nombreimagen = time() . '-' . $image->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $user->image = $url. $nombreimagen;
        }
        $user->save();

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
    }
}