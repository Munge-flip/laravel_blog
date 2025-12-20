<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentitacedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
}
