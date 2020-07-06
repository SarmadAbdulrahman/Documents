<?php

namespace App\Http\Controllers\IwDepartmentAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IwDepartmentAdminController extends Controller
{

    public function index()
    {


        return view('IwDepartmentAdmin.index');
    }
}
