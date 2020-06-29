<?php

namespace App\Http\Controllers\TaskManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskManagerController extends Controller
{
    //

    public function __construct()
    {

        app()->setLocale(Session::get('locale'));
        $this->middleware('auth');
    }


    public function  index(){

        return view('TaskManager.index');
    }
}
