<?php

namespace App\Http\Controllers\TaskManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskManagerController extends Controller
{
    //
    public function  index(){

        return view('TaskManager.index');
    }
}
