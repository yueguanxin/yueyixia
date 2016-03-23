<?php 
namespace App\Http\Controllers;
/*
	岳冠新
*/
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;

class SearchController extends Controller {
	public function index(){
		//$aid=1;
		$aid=empty($_GET['aid'])?0:$_GET['aid'];
		$address=DB::table('y_address')->get();
		//print_r($address);die;
		$view = DB::table('y_view')->where(['aid'=>$aid])->get();
		//print_r($view);die;
		$ticket= DB::table('y_ticket')->join('y_view','y_ticket.vid','=','y_view.vid')->orderBy('tprice', 'asc')->get();
		//print_r($ticket);die;

		
		return view('search/index',[
				'view'=>$view,
				'ticket'=>$ticket,
				'address'=>$address
			]);
	}
	
	public function check(){
		//$money=empty($_GET['money'])?"";
		//echo $money;die;
		$vid=explode(",",$_GET['vid']);
		//echo $vid;
		$view = DB::table('y_view')->whereIn('vid',$vid)->get();
		//print_r($view);die;
		$ticket= DB::table('y_ticket')->join('y_view','y_ticket.vid','=','y_view.vid')->orderBy('tprice', 'asc')->get();
		//print_r($ticket);die;

		
		return view('search/check',[
				'view'=>$view,
				'ticket'=>$ticket
			]);
	}
}