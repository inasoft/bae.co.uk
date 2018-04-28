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
       



class CurrencyController extends Controller 
{
    
    public function getplanData()
    {    
        //,'gold_plans'=>$gold_plans,'platinum_plans'=>$platinum_plans);
        
        $silver_plans       = DB::table('silver_currency_plan')->get();
        $gold_plans         = DB::table('gold_currency_plan')->get();
        $platinum_plans     = DB::table('platinum_currency_plan')->get();
        return View('admin.dashboard.currency-calculator')->with(['silver_plans' => $silver_plans,'gold_plans'=> $gold_plans,'platinum_plans'=>$platinum_plans]);
    }
    public function postPlanData(Request $request)
    {
       $s_ids=DB::table('silver_currency_plan')->get();
       foreach($s_ids  as $id)
       {
        $update_silver_range=Input::get('silver_range_'.$id->id);
        $update_price_value=Input::get('silver_price_'.$id->id);
        DB::table('silver_currency_plan')->where('id',$id->id)->update(['day_range'=>$update_silver_range,'price'=>$update_price_value]);
       } 
        $g_ids=DB::table('gold_currency_plan')->get();
        foreach($g_ids  as $id)
       {
        $update_silver_range=Input::get('gold_range_'.$id->id);
        $update_price_value=Input::get('gold_price_'.$id->id);
        DB::table('gold_currency_plan')->where('id',$id->id)->update(['day_range'=>$update_silver_range,'price'=>$update_price_value]);
       }
        $p_ids=DB::table('platinum_currency_plan')->get();
        foreach($p_ids  as $id)
       {
        $update_silver_range=Input::get('platinum_range_'.$id->id);
        $update_price_value=Input::get('platinum_price_'.$id->id);
        DB::table('platinum_currency_plan')->where('id',$id->id)->update(['day_range'=>$update_silver_range,'price'=>$update_price_value]);
       }
       Alert::success('Success');
       return redirect('/plan-with-currency');
    }        
    
}