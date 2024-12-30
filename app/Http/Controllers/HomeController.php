<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $doctors = Doctor::all();
            return view('home', compact('doctors'));
        }
        
        return view('welcome');
    }

    public function redirect()
    {
        return redirect()->route('home');
    }
}
