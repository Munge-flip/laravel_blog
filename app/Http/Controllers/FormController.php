<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class FormController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }
    public function create() {
        return view('forms.add');
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', Password::defaults()],
        ]);
        Auth::user()->forms()->create([
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
        ]);
        return redirect()->route('forms.index');
    }
}
