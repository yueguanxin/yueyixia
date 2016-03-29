<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
 
use Illuminate\Http\Request;
 
class DetailsController extends Controller {
	public function index(){
		//接收景点ID
		$uid = session('uid');
		if(!empty($_GET['oid'])){
			$oid=$_GET['oid'];
			$narr = DB::table('y_order')->join('y_ticket', 'y_order.tid', '=', 'y_ticket.tid')->where(['y_order.oid'=>$oid,])->get();
		}


		//print_r($narr[0]['vid']);die;
		if(empty($_GET['vid'])){
			$id=$narr[0]['vid'];
		}else{
			$id=$_GET['vid'];
		}


		if(!empty($_GET['test'])){
			$test = $_GET['test'];
		}else{
			$test = "";
		}
		//echo $id.$uid;die;
		$users = DB::table('y_view')->join('y_address', 'y_view.aid', '=', 'y_address.aid')->join('y_ticket', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_view.vid'=>$id,])->get();
		$arr = DB::table('y_comment')->join('y_view', 'y_comment.vid', '=', 'y_view.vid')->join('y_user', 'y_comment.uid', '=', 'y_user.uid')->where(['y_comment.vid'=>$id])->orderBy('cc_id', 'desc')->get();
		$arr2 = DB::table('y_browse')->join('y_view', 'y_browse.vid', '=', 'y_view.vid')->join('y_user', 'y_browse.uid', '=', 'y_user.uid')->where(['y_browse.uid'=>$uid])->limit(4)->get();
		$arr3 = DB::table('y_browse')->where(['vid'=>$id,'uid'=>$uid])->get();
		$address=DB::table('y_address')->get();
		if(!empty($uid)){
				if(empty($arr3)){
					DB::table('y_browse')->insert(['vid' => $id, 'uid' => $uid]);
				}else{

				}
		}
		//print_r($narr);die;
		if(empty($_GET['oid'])){
			return view("details/index",['user'=>$users,'arr'=>$arr,'address'=>$address,'arr2'=>$arr2,'test'=>$test]);
		}else{
			return view("details/index",['user'=>$users,'arr'=>$arr,'address'=>$address,'arr2'=>$arr2,'test'=>$test,'narr'=>$narr]);
		}

	}
	/*
	 * 添加点击量
	 * */
	public function page(){
		$id = $_GET['id'];
		//echo $id;die;
		//$id=8;
		$users = DB::table('y_view')->where(['vid'=>$id,])->get();
		$sum = $users[0]['vclick'];
		$sum = intval($sum);
		$sum++;
		$arr = DB::table('y_view')->where('vid', $id)->update(['vclick' => $sum]);
		if($arr) {
			echo 1;die;
		}else{
			echo 2;die;
		}
	}
	/*
	 *全部订单
	 * */
	public function all(){
		$uid = session('uid');
		$arr = DB::table('y_user')->join('y_order', 'y_order.uid', '=', 'y_user.uid')->join('y_ticket', 'y_ticket.tid', '=', 'y_order.tid')->join('y_view', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_user.uid'=>$uid])->get();
		if(empty($arr)){
			return view("details/kong",['arr'=>$arr]);
		}
		return view("details/all",['arr'=>$arr]);
	}
	/*
	 *未支付订单
	 * */
	public function npay(){
	$id = Input::get('id');
	$uid = session('uid');
	$arr = DB::table('y_user')->join('y_order', 'y_order.uid', '=', 'y_user.uid')->join('y_ticket', 'y_ticket.tid', '=', 'y_order.tid')->join('y_view', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_user.uid'=>$uid,'y_order.ostate'=>$id])->get();
	if(empty($arr)){
		return view("details/kong",['arr'=>$arr]);
	}
	return view("details/all",['arr'=>$arr]);
	}
	/*
	 *未发货订单
	 * */
	public function nform(){
		$id = Input::get('id');
		$uid = session('uid');
		$arr = DB::table('y_user')->join('y_order', 'y_order.uid', '=', 'y_user.uid')->join('y_ticket', 'y_ticket.tid', '=', 'y_order.tid')->join('y_view', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_user.uid'=>$uid,'y_order.ostate'=>$id])->get();
		if(empty($arr)){
			return view("details/kong",['arr'=>$arr]);
		}
		return view("details/all",['arr'=>$arr]);
	}
	/*
	 *待收货订单
	 * */
	public function ninfo(){
		$id = Input::get('id');
		$uid = session('uid');
		$arr = DB::table('y_user')->join('y_order', 'y_order.uid', '=', 'y_user.uid')->join('y_ticket', 'y_ticket.tid', '=', 'y_order.tid')->join('y_view', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_user.uid'=>$uid,'y_order.ostate'=>$id])->get();
		if(empty($arr)){
			return view("details/kong",['arr'=>$arr]);
		}
		return view("details/all",['arr'=>$arr]);
	}
	/*
	 *待评论订单
	 * */
	public function ncon(){
		$id = Input::get('id');
		$uid = session('uid');
		$arr = DB::table('y_user')->join('y_order', 'y_order.uid', '=', 'y_user.uid')->join('y_ticket', 'y_ticket.tid', '=', 'y_order.tid')->join('y_view', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_user.uid'=>$uid,'y_order.ostate'=>$id])->get();
		if(empty($arr)){
			return view("details/kong",['arr'=>$arr]);
		}
		return view("details/all",['arr'=>$arr]);
	}
	public function addcon(){
		$con = Input::get('con');
		$id = Input::get('id');
		$uid = session('uid');
		$narr = DB::table('y_order')->join('y_ticket', 'y_order.tid', '=', 'y_ticket.tid')->where(['y_order.oid'=>$id,])->get();
		$vid=$narr[0]['vid'];
		$time=date('Y-m-d',time());
		$arr = DB::table('y_order')->where('oid', $id)->update(['ostate' => 4]);
		$db = DB::table('y_comment')->insert(['cc_content' => $con, 'uid' =>$uid, 'vid' =>$vid, 'cc_time' =>$time]);
		if($arr && $db){
			echo "评论成功";
		}else{
			echo "评论失败";
		}
	}
}

