<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Gregwar\Captcha\CaptchaBuilder;
use Session;

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
				  session(['uimg' => $arr['uimg']]);
			}else{
				$re=DB::table('y_user')->insert([
					['wbid' => ''.$uid_get['uid'].'', 'uname' => ''.$user_message['screen_name'].'','uimg'=>'logo.jpeg'],
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
				 session(['uimg' => $arr['uimg']]);
			}else{
				$re=DB::table('y_user')->insert([
					['qqid' => ''.$_SESSION['open'].'', 'uname' => ''.$_SESSION['nickname'].'','uimg'=>'logo.jpeg'],
				]);
			session(['name' =>$_SESSION['nickname']]);
			}
		}
		$address=DB::table('y_address')->get();
		$click = DB::table('y_view')->orderBy('vclick', 'desc')->limit(3)->get();
		$view=DB::table('y_view')->where(["vspecial"=>'1'])->get();
		return view('index/index',['code_url'=>$code_url,'address'=>$address,'click'=>$click,'view'=>$view]);		
	}

	public function yanzhengma($tmp){
		//验证码
			 //生成验证码图片的Builder对象，配置相应属性 
			 $builder = new CaptchaBuilder;
			 //可以设置图片宽高及字体 
			 $builder->build($width = 100, $height = 30, $font = null); 
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
				session(['uimg' => $arr['uimg']]);
			echo"<script>alert('登陆成功'); location.href='/'</script>";
			}else{
				echo"<script>alert('密码错误！请重新登录'); location.href='/'</script>";
			}
		}else{
			echo"<script>alert('用户名错误！请重新登录'); location.href='/'</script>";
		}
	}
//忘记密码------登陆
	public function wang_pwd(){
		$tel=Input::get('tel');
		$arr = DB::table('y_user')->where('uphone', $tel)->first();
		if($arr){
				session(['name' => $arr['uname']]);
				session(['uid' => $arr['uid']]);
				session(['uimg' => $arr['uimg']]);
			echo"<script>alert('登陆成功'); location.href='/'</script>";
		}else{
			echo"<script>alert('登陆失败'); location.href='/'</script>";
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
			['uphone' => ''.$tel.'', 'upwd' => ''.$pwd.'','uname'=>''.$tel.'','uimg'=>'logo.jpeg'],
		]);
		if($re){
			echo"<script>alert('注册成功'); location.href='/'</script>";
			$arr = DB::table('y_user')->where('uphone', $tel)->first();
			session(['name' => $tel]);
			session(['uimg' =>$arr['uimg']]);
			session(['uid' =>$arr['uid']]);
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


		//短信验证

		public function Post($curlPost,$url){
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_NOBODY, true);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
			$return_str = curl_exec($curl);
			curl_close($curl);
			return $return_str;
	}
	public function xml_to_array($xml){
		$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
		if(preg_match_all($reg, $xml, $matches)){
			$count = count($matches[0]);
			for($i = 0; $i < $count; $i++){
			$subxml= $matches[2][$i];
			$key = $matches[1][$i];
				if(preg_match( $reg, $subxml )){
					$arr[$key] = $this->xml_to_array( $subxml );
				}else{
					$arr[$key] = $subxml;
				}
			}
		}
		return $arr;
	}
	public function sms(){
		$target = "http://120.55.205.5/webservice/sms.php?method=Submit";
		//替换成自己的测试账号,参数顺序和wenservice对应

		$mobile = Input::get('mobile');
		
		
		
		
		if(isset($_GET['hq1'])){
		$rend=session('rend');
		$hq1 = Input::get('hq1');
		if($rend==$hq1){
			echo 1;die;
		}else{
			echo 0;die;
			}
		}else{
		$rend=rand('10000','99999');
		session(['rend' => $rend]);
		$post_data = "account=cf_wxhdcs&password=wxhdcs@789&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$rend."。请不要把验证码泄露给其他人。");
		//密码可以使用明文密码或使用32位MD5加密
		$gets =  $this->xml_to_array($this->Post($post_data, $target));
		echo $gets['SubmitResult']['msg'];
		}
	}

	//退出
	public function logout(){
		//unset(session('name'));
		include_once( 'libweibo-master/config.php' );
		include_once( 'libweibo-master/saetv2.ex.class.php' );
		$o = new \SaeTOAuthV2( WB_AKEY , WB_SKEY );

		$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );
		session()->flush();
		$address=DB::table('y_address')->get();
		$click = DB::table('y_view')->orderBy('vclick', 'desc')->limit(3)->get();
		$view=DB::table('y_view')->where(["vspecial"=>'1'])->get();
		return view('index/index',['code_url'=>$code_url,'address'=>$address,'click'=>$click,'view'=>$view]);
	}

	

}