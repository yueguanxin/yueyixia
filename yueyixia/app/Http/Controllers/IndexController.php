<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Gregwar\Captcha\CaptchaBuilder;

use Illuminate\Http\Request;
 
class IndexController extends Controller {
	public function index(){
		include_once( 'libweibo-master/config.php' );
		include_once( 'libweibo-master/saetv2.ex.class.php' );
		$o = new \SaeTOAuthV2( WB_AKEY , WB_SKEY );

		$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );

		//微博入库
		session_start();
		if(!empty($_SESSION['token']['access_token'])){
			$c = new \SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
				$ms  = $c->home_timeline(); // done
				$uid_get = $c->get_uid();
			$arr = DB::table('y_user')->where('wbid', $uid_get['uid'])->first();
			$user_message = $c->show_user_by_id( $uid_get['uid']);//根据ID获取用户等基本信息
			if($arr){
				  session(['name' =>$arr['uname']]);
				  session(['uid' =>$arr['uid']]);
			}else{
				$re=DB::table('y_user')->insert([
					['wbid' => ''.$uid_get['uid'].'', 'uname' => ''.$user_message['screen_name'].''],
				]);
				session(['name' =>$user_message['screen_name']]);
			}
		}

		//qq入库
		if(!empty($_SESSION['open'])){
			$arr = DB::table('y_user')->where('qqid', $_SESSION['open'])->first();
			if($arr){
				 session(['name' =>$arr['uname']]);
				 session(['uid' =>$arr['uid']]);
			}else{
				$re=DB::table('y_user')->insert([
					['qqid' => ''.$_SESSION['open'].'', 'uname' => ''.$_SESSION['nickname'].''],
				]);
			session(['name' =>$_SESSION['nickname']]);
			}
		}
		$address=DB::table('y_address')->get();
		return view('index/index',['code_url'=>$code_url,'address'=>$address]);


		
	}

	public function yanzhengma($tmp){
		//验证码
			 //生成验证码图片的Builder对象，配置相应属性 
			 $builder = new CaptchaBuilder;
			 //可以设置图片宽高及字体 
			 $builder->build($width = 100, $height = 40, $font = null); 
			 //获取验证码的内容 
			 $phrase = $builder->getPhrase();
			 //把内容存入session 
			 Session::flash('milkcaptcha', $phrase); 
			 //生成图片 
			 header("Cache-Control: no-cache, must-revalidate");
			 header('Content-Type: image/jpeg');
			 $builder->output();
	}

//登陆
	public function login(){
		//$pwd=$_POST['pwd'];
		 $pwd = Input::get('pwd');
		$name=Input::get('name');
		$arr = DB::table('y_user')->where('uname', $name)->first();
		if($arr){
			if($arr['upwd']==md5($pwd)){
			    session(['name' => $name]);
				session(['uid' => $arr['uid']]);
			echo"<script>alert('登陆成功'); location.href='/'</script>";
			}else{
				echo"<script>alert('密码错误！请重新登录'); location.href='/'</script>";
			}
		}else{
			echo"<script>alert('用户名错误！请重新登录'); location.href='/'</script>";
		}
	}

	//微博第三方登陆
	public function callback(){
		return view('index/callback');
	}

	//注册
	public function register(){
		$pwd=md5(Input::get('pwd'));
		$tel=Input::get('tel');
		$re=DB::table('y_user')->insert([
			['uphone' => ''.$tel.'', 'upwd' => ''.$pwd.'','uname'=>''.$tel.'','uimg'=>'avatar-default-big-6d86d3f0580c8b442be8ef5e50327273.png'],
		]);
		if($re){
			echo"<script>alert('注册成功'); location.href='/'</script>";
			session(['name' => $tel]);
		}else{
			echo"<script>alert('注册成功'); location.href='/'</script>";
		}
	}

	//验证手机号唯一
	public function tel_one(){
		$tel=Input::get('tel');
		$arr = DB::table('y_user')->where('uphone', $tel)->get();
		if($arr){
			echo '0';
		}else{
			echo '1';
		}
	}
	

}