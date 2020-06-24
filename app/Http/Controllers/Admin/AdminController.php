<?php

namespace App\Http\Controllers\Admin;
use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {



        return view("Admin.Index");



    }

    public function create()
    {

        $Roles=Role::all();
        $departments=Department::all();
        app()->setLocale('ar');
        $InformationArray=Array(
            "Roles"=>$Roles,
            "departments"=>$departments
        );
        return view('Admin.CreateUser',$InformationArray);

    }

    public  function StoreUser(Request $request)
    {


        DD($request);

    }





}
