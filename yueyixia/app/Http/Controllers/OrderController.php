<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class OrderController extends Controller {
	public function index(){
		//print_r($_GET);die;
		$nub = $_GET['nub'];
		$id = $_GET['id'];
		$count = $_GET['count'];
		$time = $_GET['time'];
		$pr = $_GET['pr'];
		$uid = $_GET['uid'];
		$state = $_GET['state'];
		$db = DB::table('y_order')->insert([
			['oname' => $nub, 'tid' =>$id, 'onum' =>$count, 'otime' =>$time, 'omoney' =>$pr, 'uid' =>$uid, 'ostate' =>$state]
		]);
		if($db){
			echo "生成订单成功,订单号:".$nub;
		}else{
			echo "生成订单失败";
			
		}
	}
	public function lists(){
		$uid=$_GET['oname'];
		//echo $uid;die;
		$arr = DB::table('y_order')->join('y_ticket', 'y_order.tid', '=', 'y_ticket.tid')->join('y_view', 'y_ticket.vid', '=', 'y_view.vid')->where(['y_order.oname'=>$uid])->get();
		//print_r($arr);die;->join('y_user', 'y_order.uid', '=', 'y_user.uid')
		//print_r($arr);die;
		return view("details/lists",['arr'=>$arr]);
	}
}

