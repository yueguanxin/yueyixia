<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Mail;

use Illuminate\Http\Request;
 
class UserController extends Controller {
//用户设置------修改个人资料
	public function edit(){
		$uid=session('uid');
		$arr = DB::table('y_user')->where('uid', $uid)->first();
		$address=DB::table('y_address')->get();
		return view('user/edit',['arr'=>$arr,'address'=>$address]);
	}

	public function edit_add(){
		 $uname = Input::get('uname');
		 $uqianming = Input::get('uqianming');
		 $my_jianshao = Input::get('my_jianshao');
		 $uid=session('uid');
		 $arr=DB::update("update y_user set uname ='".$uname."',uqianming='".$uqianming."',my_jieshao='".$my_jianshao."' where uid = $uid");
		  session(['name' =>$uname]);
		 if($arr){
			echo"<script>alert('修改成功'); location.href='/edit'</script>";
		 }else{
			echo"<script>alert('修改失败'); location.href='/edit'</script>";
		 }

	}

	//用户设置-------更改头像
	public function edit_avatar(){
		$address=DB::table('y_address')->get();
		return view('user/edit_avatar',['address'=>$address]);
	}

	//用户设置-------修改密码
	public function edit_pwd(){
		$address=DB::table('y_address')->get();
		return view('user/edit_pwd',['address'=>$address]);
	}

	public function pwd_update(){
		$mqpwd=Input::get('mq_pwd');
		$upwd=Input::get('upwd');
		$qrpwd=Input::get('qrpwd');
		$uid=session('uid');
		 $users = DB::select("select * from y_user where uid=$uid and upwd='".md5($mqpwd)."'");
		 if($users){
			 if($qrpwd==$upwd){
			 $arr=DB::update("update y_user set upwd ='".md5($upwd)."' where uid = $uid");
			 if($arr){
			 	echo"<script>alert('修改成功'); location.href='/edit_pwd'</script>";
			 }else{
				echo"<script>alert('修改失败'); location.href='/edit_pwd'</script>";
				}
			 }else{
				echo"<script>alert('两次密码不一致，请重新输入'); location.href='/edit_pwd'</script>";
			 }
		 }else{
			echo"<script>alert('您输入的目前密码不正确'); location.href='/edit_pwd'</script>";
		 }
	}

	//用户设置-------修改电话
	public function edit_phone(){
		$address=DB::table('y_address')->get();
		return view('user/edit_phone',['address'=>$address]);
	}

	//用户设置----绑定邮箱
	public function edit_email(){
		$address=DB::table('y_address')->get();
		$uid=session('uid');
		$arr = DB::table('y_user')->where('uid', $uid)->first();
		return view('user/edit_email',['arr'=>$arr,'address'=>$address]);
	}

	public function send(){
		$uid=session('uid');
		$arr = DB::table('y_user')->where('uid', $uid)->first();
		if($arr['is_yanzheng']!=1){
		$email=Input::get('email');
		
		 $arr=DB::update("update y_user set u_email ='".$email."',is_yanzheng=1 where uid = $uid");
		}
		//echo $email;die;
		$name = '约一下';
		$flag = Mail::send('user.email',['name'=>$name],function($message){
			$email=Input::get('email');
		  $to = ''.$email.'';
		  $message ->to($to)->subject('测试邮件');
		});
		if($flag){
		  echo '发送邮件成功，请查收！';
		}else{
		  echo '发送邮件失败，请重试！';
		}
	}

	public function email_add(){
		$uid=Input::get('uid');
		$arr=DB::update("update y_user set is_yanzheng=2 where uid = $uid");
		if($arr){
			echo"<script>alert('绑定成功'); location.href='/edit_email'</script>";
		}else{
			echo"<script>alert('绑定失败'); location.href='/edit_email'</script>";
		}
	}

	//验证用户名唯一
	public function name_one(){
		$name=Input::get('name');
		$arr = DB::table('y_user')->where('uname', $name)->get();
		if($arr){
			echo '0';
		}else{
			echo '1';
		}
	}

}