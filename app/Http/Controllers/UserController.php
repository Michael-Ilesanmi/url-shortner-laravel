<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(UserFormRequest $request)
    {
        $data = $request->safe()->only(['email','first_name', 'username', 'last_name', 'phone', 'password']);
        if (User::where('email', $data['email'])->exists()) {
            return back();
        }
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        auth()->login($user);
 
        return redirect('/')->with('message', 'Account Created');

    }
    
    
    public function index(UserFormRequest $request)
    {
        $data = $request->safe()->only(['email', 'password']);
        if (auth()->attempt($data)) {
            $request->session()->regenerate(); 
            return redirect('/home');
        } 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        return redirect("/");
    }
}
