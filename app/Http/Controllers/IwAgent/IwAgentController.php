<?php

namespace App\Http\Controllers\IwAgent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Ticket;
use App\TicketDetail;
use App\User;
use App\Department;

class IwAgentController extends Controller
{
    
    public function index()
    {



        app()->setLocale(Session::get('locale'));
        $userId=auth()->user()->id;

       // $DepartmentId=Department::where('user_id',"=",$userId)->get()[0]["id"];
       // $tickets=Ticket::where('department_id',"=",$DepartmentId)->get();
       $tickets=Ticket::all();
        $Users=User::all();

        $InformationArray=Array(
            'tickets'=>$tickets,
            'Users'=>$Users
        );


        return view('IwAgent.index',$InformationArray);

    }
}
