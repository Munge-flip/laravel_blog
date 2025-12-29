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
    public function create()
    {
        return view('forms.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'text' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', Password::defaults()],
            'color' => ['required', 'string', 'hex_color'],
            'game' => ['required', 'string'],
            'checkbox' => ['accepted'],
            'date' => ['required', 'date'],
        ]);
        Auth::user()->forms()->create([
            'text' => $validated['text'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'color' => $validated['color'],
            'game' => $validated['game'],
            'checkbox' => $validated['checkbox'],
            'date' => $validated['date'],
        ]);
        return redirect()->route('forms.index');
    }
}
