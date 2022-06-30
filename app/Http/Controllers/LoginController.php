<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login () {
        return view("homepage.login-page", [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request) {

        $user = User::where("email", $request->email)->first();

        $validated = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended("/");
        }

        return redirect("/login");
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
