<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }
    
    public function login()
    {
        return Inertia::render('Login');
        
    }
    
    public function register()
    {
        return Inertia::render('Dashboard');
        
    }

    public function add()
    {
        return Inertia::render('Add');
        
    }
    
}