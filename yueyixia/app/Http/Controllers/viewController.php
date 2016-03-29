<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class viewController extends Controller {
	public function index(){
		//接收传过来的景点名称
		$vid=$_GET['vid'];
		$view=DB::table('y_view')->where(['vid'=>$vid])->first();
		//查询要轮播的图片
		$arr=DB::table("y_view")->limit("8")->get();
		//$brr=DB::table("y_view")->limit("3")->get();
		$brr=DB::table('y_ticket')->join('y_view', 'y_ticket.vid', '=', 'y_view.vid')->where('y_ticket.vid',$vid)->join('y_order', 'y_ticket.tid', '=', 'y_order.tid')->join('y_user', 'y_order.uid', '=', 'y_user.uid')->get();
		//print_r($brr);die;
		//查出点击量最大的三个景点
		$crr=DB::table("y_view")->orderby('vclick','desc')->limit("3")->get();
		//查询景点所在的地区
		$address=DB::table('y_address')->get();
		//print_r($crr);die;
		return view('view/index',['arr'=>$arr,'brr'=>$brr,'crr'=>$crr,'address'=>$address,'vname'=>$view['vname']]);
	}
}
