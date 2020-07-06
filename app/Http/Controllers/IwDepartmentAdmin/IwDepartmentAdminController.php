<?php

namespace App\Http\Controllers\IwDepartmentAdmin;

use App\Department;
use App\Http\Controllers\Controller;
use App\Ticket;
use App\TicketDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IwDepartmentAdminController extends Controller
{

    public function index()
    {

        app()->setLocale(Session::get('locale'));
        $userId=auth()->user()->id;
        $DepartmentId=Department::where('user_id',"=",$userId)->get()[0]["id"];
        $tickets=Ticket::where('department_id',"=",$DepartmentId)->get();

        $InformationArray=Array(
            'tickets'=>$tickets
        );

        return view('IwDepartmentAdmin.index',$InformationArray);
    }

    public function GetDetails(Request $request)
    {

        $TicketDetails=TicketDetail::where('ticket_id','=',$request->id)->orderBy('created_at', 'desc')->get();


        $informationArray=array(
            'TicketDetails'=>$TicketDetails,
            'id'=>$request->id
        );
        return view('IwDepartmentAdmin.timeline',$informationArray);


    }


    public function IwDepartmentAdmin(Request $request)

    {





    }
}
