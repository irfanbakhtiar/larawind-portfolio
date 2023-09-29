<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home', [
            'projects' => Projects::latest()->get(),
            'user' => User::first()
        ]);
    }
}
