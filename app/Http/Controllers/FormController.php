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
        $forms = Auth::user()->forms;
        return view('forms.index', compact('forms'));
    }
    public function create()
    {
        return view('forms.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'middleName' => ['required', 'string', 'max:255'],
            'dateOfBirth' => ['required', 'date'],
            'password' => ['required', Password::defaults()],
        ]);
        Auth::user()->forms()->create([
            'firstName' => $validated['firstName'],
            'lastName' => $validated['lastName'],
            'middleName' => $validated['middleName'],
            'dateOfBirth' => $validated['dateOfBirth'],
            'password' => Hash::make($validated['password']),
        ]);
        return redirect()->route('forms.index');
    }
    public function show($id)
    {
        $form = Auth::user()->forms()->findOrFail($id);

        return view('forms.show', compact('form'));
    }
    public function edit($id)
    {
        $form = Auth::user()->forms()->findOrFail($id);

        return view('forms.edit', compact('form'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'middleName' => ['required', 'string', 'max:255'],
            'dateOfBirth' => ['required', 'date'],
            'password' => ['required', Password::defaults()],
        ]);
        $form = Auth::user()->forms()->findOrFail($id);

        $form->update([
            'firstName' => $validated['firstName'],
            'lastName' => $validated['lastName'],
            'middleName' => $validated['middleName'],
            'dateOfBirth' => $validated['dateOfBirth'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('forms.index');
    }
    public function destroy($id)
    {
        $form = Auth::user()->forms()->findOrFail($id);

        $form->delete();

        return redirect()->route('forms.index');
    }
}
