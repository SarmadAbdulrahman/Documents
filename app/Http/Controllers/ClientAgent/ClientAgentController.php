<?php

namespace App\Http\Controllers\ClientAgent;

use App\Http\Controllers\Controller;
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
        return view('ClientAgent.CreateTicket');
    }
}
