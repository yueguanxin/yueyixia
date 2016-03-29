<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
 
use Illuminate\Http\Request;
 
class OrderController extends Controller {
	public function index(){
		//print_r($_GET);die;
		if(session('uid')==""){
			echo "请先登录";die;
		}
		$nub = $_GET['nub'];
		$id = $_GET['id'];
		$count = $_GET['count'];
		$time = $_GET['time'];
		$pr = $_GET['pr'];
		$uid = session('uid');
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
		$address=DB::table('y_address')->get();
		return view("details/lists",['arr'=>$arr,'address'=>$address]);
	}
	public function myorder(){
		//session()->flush();
		$uid = session('uid');
		$arr = DB::table('y_user')->join('y_order', 'y_order.uid', '=', 'y_user.uid')->join('y_ticket', 'y_ticket.tid', '=', 'y_order.tid')->join('y_view', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_user.uid'=>$uid])->get();
		$address=DB::table('y_address')->get();
		//print_r($arr);die;
		return view("details/myorder",['arr'=>$arr,'address'=>$address]);
	}
	public function dorder(){
		$name = $_GET['oname'];
		//echo $name;die;
		$order = DB::table('y_order')->where(['oid'=> $name])->delete();
		if($order){
			echo "删除成功";
		}else{
			echo "删除失败";
		}
	}
	public function pay(){
		$id = Input::get('id');
		//echo $id;die;
		$arr = DB::table('y_order')->where('oid', $id)->update(['ostate' => 0]);
		if($arr){
			echo "<script>alert('支付成功');location.href='myorder'</script>";
		}else{
			echo "<script>alert('支付失败');location.href='/lists'</script>";
		}
	}
}

