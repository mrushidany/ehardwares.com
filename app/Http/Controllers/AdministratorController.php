<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->hasRole('super_administrator'))
        {
            return redirect()->route('dashboard');
        }
    }

    public function settings()
    {
        if(Auth::user()->hasRole('super_administrator'))
        {
            $data =
            [
                'users' => User::all()->count()
            ];
            return view('ecommerce.admin.super.settings.index')->with($data);
        }
    }
}
