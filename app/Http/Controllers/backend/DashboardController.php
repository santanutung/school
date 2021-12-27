<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {


        // $users = User::where('role_id', 2)->get();
        $users = User::get();


        return  view('backend.dashboard.index', compact('users'));
    }
}
