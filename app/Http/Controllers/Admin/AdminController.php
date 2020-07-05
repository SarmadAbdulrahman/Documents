<?php

namespace App\Http\Controllers\Admin;
use App\Department;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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

        app()->setLocale(Session::get('locale'));
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
      //  app()->setLocale('ar');
        app()->setLocale(Session::get('locale'));
        $InformationArray=Array(
            "Roles"=>$Roles,
            "departments"=>$departments
        );
        return view('Admin.CreateUser',$InformationArray);

    }

    public  function StoreUser(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'emailInput' => 'required|email|unique:users,email',
            'userameInput' => 'required|string|max:50',
            'passwordInput' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['status'=>'fail','reasons'=>$validator->messages()],400);
        }

        // this is new way of beer  Role
       $user= User::create([
             'name'=>$request['userameInput']
            , 'email'=>$request['emailInput']
            , 'password'=>Hash::make($request['passwordInput'])
        ]);



        $user->assignRole(Role::find($request["Role"]));






        return response()->json(['status'=>'success'],200);

    }


    public function ChangeUserRole(){


        app()->setLocale(Session::get('locale'));


        $users=User::all();
        $Roles=Role::all();


        $informationArray=Array(
            'users'=>$users,
            'Roles'=>$Roles
        );



        return view('Admin.ChangeUserRole',$informationArray);
    }



    public function StoreUserRole(Request $request)
    {



        $user=User::find($request->id);
        $user->syncRoles(Role::find($request["Role"]));

        return redirect()->back();


    }


    public function StoreUserPassword(Request $request)
    {


        $user=User::find($request->id);
        $user->password=Hash::make($request['password']);
        $user->save();
        return redirect()->back();


    }






}
