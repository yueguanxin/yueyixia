<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;

class SearchController extends Controller {
	public function index(){
		$aid=1;
		//$aid=$_GET['aid'];
		$view = DB::table('y_view')->where(['aid'=>$aid])->get();
		//print_r($view);die;
		$ticket= DB::table('y_ticket')->join('y_view','y_ticket.vid','=','y_view.vid')->orderBy('tprice', 'asc')->get();
		//print_r($ticket);die;

		
		return view('search/index',[
				'view'=>$view,
				'ticket'=>$ticket
			]);
	}
	
	public function check(){
		$money=$_GET['money'];
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