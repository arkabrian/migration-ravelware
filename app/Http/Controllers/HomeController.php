<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Resources; // Adjust the model namespace based on your actual implementation

class HomeController extends Controller
{
    public function index(){
        return view('home')->with(['resources' => Resources::all()]);
    }
}