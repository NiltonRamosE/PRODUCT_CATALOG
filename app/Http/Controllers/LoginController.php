<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function iniciarSesion(Request $request)
    {
        $work_email = $request->input('userEmail');
        $password = $request->input('userPassword');
        if(!isset($work_email, $password)){
            return redirect()->back()->with('error', 'Debes de completar ambos campos');
        }
        if (auth('administrators')->attempt(['work_email' => $work_email, 'password' => $password])) {
            $user = auth('administrators')->user(); 
            Session::put('user', $user);

            return redirect()->route('dashboard.index');
        }
        
        return redirect()->back()->with('error', 'Credenciales incorrectas');
    }

    public function cerrarSesion(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::forget('user');

        return redirect()->route('login.index');
    }

}
