<?php

namespace App\Http\Controllers\ClientAgent;

use App\Http\Controllers\Controller;
use App\Ticket;
use App\TicketDetail;
use App\TicketType;
use Illuminate\Http\Request;
use Validator;


class ClientAgentController extends Controller
{
    //

    public function Index()
    {

        return view('ClientAgent.index');
    }


    public function CreateTicket()
    {


        $TicketTypes=TicketType::all();


        $informationArray=array(
            'TicketTypes'=>$TicketTypes
        );
        return view('ClientAgent.CreateTicket',$informationArray);
    }

    public function StoreTicket(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'ticket_type' => 'required',
            'ticket' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json(['status'=>'fail','reasons'=>$validator->messages()],400);
        }

        Ticket::create([
              'user_id'=>auth()->user()->id
            , 'ticket_type_id'=>$request["ticket_type"]
            , 'issue_name'=>$request["ticket"]
            ,'progress'=>'open'

        ]);

        return response()->json(['status'=>'success'],200);
    }


    public function ShowTicket()
    {


        $tickets=Ticket::where('user_id','=',auth()->user()->id)->get();




        $informationArray=array(
            'tickets'=>$tickets
        );
        return view('ClientAgent.showTicket',$informationArray);



    }


    public function GetDetails(Request $request)
    {


        $TicketDetails=TicketDetail::where('ticket_id','=',$request->id)->get();


        $informationArray=array(
            'TicketDetails'=>$TicketDetails
        );
        return view('ClientAgent.timeline',$informationArray);

    }
}