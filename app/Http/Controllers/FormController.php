<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index() {
        $forms = Auth::user()->forms;

        return view('forms.index', ['forms' => $forms]);
    }
}
