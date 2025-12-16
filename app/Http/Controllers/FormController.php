<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
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
            'username' => ['required', 'string', 'max:50'],
            'password' => ['required', Password::defaults()],
        ]);
        $form = Form::class([
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
        ]);
        return redirect()->route('forms.index', compact('form'));
    }
}
