<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatabaseSettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function db_migrate()
    {

    }
}
