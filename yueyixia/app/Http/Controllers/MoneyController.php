<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class MoneyController extends Controller {
	public function index(){
		$uid=session('uid');
		$uname=session('name');
		//echo $uname;die;
		$address=DB::table('y_address')->get();
		$arr=DB::table("y_money")->where('uid',$uid)->first();
		//print_r($arr);die;
		if(empty($uid)){
			echo "<script>alert('亲，您还没有登录');location.href='/'</script>";
		}else{
			return view('money/index',['address'=>$address,'arr'=>$arr,'uname'=>$uname]);
		}
		
	}

	//现金
	public function xianjin(){
		$uid=session('uid');
		$uname=session('name');
		//echo $uid;die;
		$address=DB::table('y_address')->get();
		$arr = DB::table('y_user')->Join('y_money', 'y_user.uid', '=', 'y_money.uid')->where('y_user.uid',$uid)->first();
		//print_r($arr);die;
		return view('money/xianjin',['address'=>$address,'arr'=>$arr,'uname'=>$uname]);
	}

	//优惠券
	public function youhuiquan(){
		$uname=session('name');
		$address=DB::table('y_address')->get();
		return view('money/youhuiquan',['address'=>$address,'uname'=>$uname]);
	}
}