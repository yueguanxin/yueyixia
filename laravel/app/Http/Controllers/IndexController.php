<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;

use Illuminate\Http\Request;
 
class IndexController extends Controller {
	public function index(){
		return view('index/index');
	}

//登陆
	public function login(){
		//$pwd=$_POST['pwd'];
		 $pwd = Input::get('pwd');
		$name=Input::get('name');
		$arr = DB::table('y_user')->where('uname', $name)->first();
		if($arr){
			if($arr->upwd==$pwd){
			    session(['name' => $name]);
			echo"<script>alert('登陆成功'); location.href='/'</script>";
			}else{
				echo"<script>alert('密码错误！请重新登录'); location.href='/'</script>";
			}
		}else{
			echo"<script>alert('用户名错误！请重新登录'); location.href='/'</script>";
		}
	}

	//注册
	public function register(){
		$pwd=md5(Input::get('pwd'));
		$tel=Input::get('tel');
		$re=DB::table('y_user')->insert([
			['uphone' => ''.$tel.'', 'upwd' => ''.$pwd.''],
		]);
		if($re){
			echo"<script>alert('注册成功'); location.href='/'</script>";
			session(['name' => $tel]);
		}else{
			echo"<script>alert('注册成功'); location.href='/'</script>";
		}
	}	
}