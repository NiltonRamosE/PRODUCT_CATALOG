<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return redirect()->route('dashboard.index');
        }
        return redirect()->back()->with('error', 'Credenciales incorrectas');
    }

}
