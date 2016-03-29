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
		//echo $aid;die;
		$address=DB::table('y_address')->get();
		//print_r($address);die;
		$view = DB::table('y_view')->where(['aid'=>$aid])->get();
		//print_r($view);die;
		$ticket= DB::table('y_ticket')->join('y_view','y_ticket.vid','=','y_view.vid')->orderBy('tprice', 'asc')->get();
		//print_r($ticket);die;
		$aname=DB::table('y_address')->where(['aid'=>$aid])->first();
		
		return view('search/index',[
				'view'=>$view,
				'ticket'=>$ticket,
				'address'=>$address,
				//'aname'=>$aname
			]);
	}
	
	public function check(){
		//$money=$_GET['money'];
		//echo $money;
		$vid=empty($_GET['vid'])?"":explode(",",$_GET['vid']);
		//$aid=$_GET['aid'];
		//echo $aid;die;
		//echo $vid;die;
		if(empty($_GET['money'])){
			$view = DB::table('y_view')->whereIn('vid',$vid)->get();
		}else{
			/*if($vid==""){
				//echo $aid;die;
				$view = DB::table('y_view')->where(['aid',$aid])->whereBetween('vstartprice', [$money1, $money])->get();
			}else{*/
				$money=$_GET['money'];
				$money1=$money-50;
				$view = DB::table('y_view')->whereIn('vid',$vid)->whereBetween('vstartprice', [$money1, $money])->get();
			//}
			
		}
		//$view = DB::table('y_view')->whereIn('vid',$vid)->whereBetween('vstartprice', [70, 80])->get();
		//print_r($view);die;
		$ticket= DB::table('y_ticket')->join('y_view','y_ticket.vid','=','y_view.vid')->orderBy('tprice', 'asc')->get();
		//print_r($ticket);die;

		
		return view('search/check',[
				'view'=>$view,
				'ticket'=>$ticket,
				//'aid'=>$aid
			]);
	}
}