<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AdminController extends Controller
{
    function index(){
        Toastr::success('Login Successfully', 'Success');
        return view('admin.dashboard');
    }
}
