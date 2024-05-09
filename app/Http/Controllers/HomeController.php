<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Services::all(); // Fetch all services from the database
        return view('home', compact('services')); // Pass the services data to the view
    }
}
