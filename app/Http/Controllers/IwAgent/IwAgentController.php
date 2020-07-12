<?php

namespace App\Http\Controllers\IwAgent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Ticket;
use App\TicketDetail;
use App\User;
use App\Department;
use App\Manager;
use Validator;


class IwAgentController extends Controller
{
    
    public function index()
    {



        app()->setLocale(Session::get('locale'));
        $userId=auth()->user()->id;

            $DepartmentId=Manager::where('emp_id',"=",$userId)->get()[0]["manager_id"];
            $tickets=Ticket::where('department_id',"=",$DepartmentId)->get();
        //  $tickets=Ticket::all();
            $Users=User::all();
            $InformationArray=Array(
                'tickets'=>$tickets,
                'Users'=>$Users
            );


        return view('IwAgent.index',$InformationArray);

    }





    public function GetDetails(Request $request)
    {

        $TicketDetails=TicketDetail::where('ticket_id','=',$request->id)->orderBy('created_at', 'desc')->get();


        $informationArray=array(
            'TicketDetails'=>$TicketDetails,
            'id'=>$request->id
        );
        return view('IwAgent.timeline',$informationArray);


    }




    public function StoreReply(Request $request)

    {


        $validator = Validator::make($request->all(), [
            'reply' => 'required',
            'id' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back();
        }


        TicketDetail::create([
             'agent_id'=>auth()->user()->id,
             'agent_comment'=>$request["reply"]
            , 'ticket_id'=>$request["id"]
        ]);



        return redirect()->back();


    }


     public function profile()
    {
        # code...
        app()->setLocale(Session::get('locale'));

        // profile

        return view('IwAgent.profile');
    }
}