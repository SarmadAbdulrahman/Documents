<?php

namespace App\Http\Controllers\ClientAgent;

use App\Http\Controllers\Controller;
use App\TicketType;
use Illuminate\Http\Request;

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



    }
}
