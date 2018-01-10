<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LodgeAdminController extends Controller
{
    public function index()
    {
        return view('lodge-admin.index');
    }
}
