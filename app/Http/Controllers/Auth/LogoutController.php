<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('guest')->except('logout');
        $this->redirectTo = route('login'); // Redirect to the login page after logout
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect($this->redirectTo);
    }
}




