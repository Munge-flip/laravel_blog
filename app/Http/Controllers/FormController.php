<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        ]);
        Auth::user()->forms()->create([
            'firstName' => $validated['firstName'],
            'lastName' => $validated['lastName'],
            'middleName' => $validated['middleName'],
            'dateOfBirth' => $validated['dateOfBirth'],
        ]);
        return redirect()->route('forms.index');
    }
    public function show($id)
    {
        $form = Auth::user()->forms()->findOrFail($id);

        return view('forms.show', compact('form'));
    }
}
