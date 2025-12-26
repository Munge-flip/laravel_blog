<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store(Request $request) {
        $validated = $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'middleName' => ['required', 'string', 'max:255'],
            'dateOfBirth' => ['required', 'date'],
        ]);
    }
}
