<?php

namespace App\Http\Controllers\Admin;
use App\Department;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Validator;

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



        $validator = Validator::make($request->all(), [
            'emailInput' => 'required|email|unique:users',
            'userameInput' => 'required|string|max:50',
            'passwordInput' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'fail','reasons'=>$validator->messages()]);
        }

        // this is new way of beer  Role
       $user= User::create([
             'name'=>$request['userameInput']
            , 'email'=>$request['emailInput']
            , 'password'=>Hash::make($request['passwordInput'])
        ]);


        $user->assignRole(Role::find($request["Role"]));


        return response()->json(['status'=>'success']);






    }





}
