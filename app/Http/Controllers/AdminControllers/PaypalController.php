<?php
namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use Session;
use Input,Response;
///use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use App\User;
       


class PaypalController extends Controller 
{
    public function generatepaypalLink()
    {
     return view('admin.dashboard.paypal-link-generator');      
    }
}