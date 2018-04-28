<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SendResponseController;

use App\Http\Requests;
use Auth;
use DB;

class chatController extends Controller
{
  public function myConverstation()
  {

    return view('dashboard.my-chat');


  }


}
