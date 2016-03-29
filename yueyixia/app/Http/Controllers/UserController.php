<?php
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Mail;

use Illuminate\Http\Request;
 /*
	领导人：岳冠新（俗称最帅的组长）
	刘亚丹     2016-3-24
	个人中心
 */
class UserController extends Controller {
	//公共
	public function __construct(){
		//parent::__construct();
		if(empty(session('name'))){
			echo"<script>alert('请先登录'); location.href='/'</script>";
		}
	}
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
		$uid=session('uid');
		$arr = DB::table('y_user')->where('uid', $uid)->first();
		return view('user/edit_phone',['address'=>$address,'arr'=>$arr]);
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


//上传头像
	public function upload_add(){
		$result = array();
		$result['success'] = false;
		$success_num = 0;
		$msg = '';
		//上传目录
		$dir = $_SERVER['DOCUMENT_ROOT']."\img\userlogo";
		// 取服务器时间+8位随机码作为部分文件名，确保文件名无重复。
		$filename = date("YmdHis").'_'.floor(microtime() * 1000).'_';
		// 处理原始图片开始------------------------------------------------------------------------>
		//默认的 file 域名称是__source，可在插件配置参数中自定义。参数名：src_field_name
	//print_r($_FILES);die;
		$source_pic = $_FILES["__avatar1"];
		//如果在插件中定义可以上传原始图片的话，可在此处理，否则可以忽略。
		if ($source_pic)
		{
			if ( $source_pic['error'] > 0 )
			{
				$msg .= $source_pic['error'];
			}
			else
			{
				//原始图片的文件名，如果是本地或网络图片为原始文件名、如果是摄像头拍照则为 *FromWebcam.jpg
				$sourceFileName1 = $source_pic["type"];
				$sourceFileName=Substr($sourceFileName1,6,4);
				//echo $aa;die;
				//原始文件的扩展名(不包含“.”)
				$sourceExtendName = substr($sourceFileName, strripos($sourceFileName, "."));
				//保存路径
				$savePath = "$dir\php_source_$filename.".$sourceExtendName;
				//当前头像基于原图的初始化参数（只有上传原图时才会发送该数据，且发送的方式为POST），用于修改头像时保证界面的视图跟保存头像时一致，提升用户体验度。
				//修改头像时设置默认加载的原图url为当前原图url+该参数即可，可直接附加到原图url中储存，不影响图片呈现。
				/*print_r($_POST);die;
				$init_params = $_POST["__initParams"];
				$result['sourceUrl'] = toVirtualPath($savePath).$init_params;*/
				move_uploaded_file($source_pic["tmp_name"], $savePath);
				$success_num++;
			}
		}
		//<------------------------------------------------------------------------处理原始图片结束
		// 处理头像图片开始------------------------------------------------------------------------>
		//头像图片(file 域的名称：__avatar1,2,3...)。
		$avatars = array("__avatar1", "__avatar2", "__avatar3");
		$avatars_length = count($avatars);
		for ( $i = 0; $i < $avatars_length; $i++ )
		{ 
			$avatar = $_FILES[$avatars[$i]];
			$avatar_number = $i + 1;
			if ( $avatar['error'] > 0 )
			{
				$msg .= $avatar['error'];
			}
			else
			{
				$savePath = "$dir\php_avatar" . $avatar_number . "_$filename.jpg";
				//$result['avatarUrls'][$i] = toVirtualPath($savePath);
				move_uploaded_file($avatar["tmp_name"], $savePath);
				$success_num++;
				//头像入库
				$uid=session('uid');
				$aa='php_source_'.$filename.'.'.$sourceFileName;
				$arr=DB::update("update y_user set uimg ='".$aa."' where uid = $uid");

				session(['uimg' =>$aa]);
			}
		} 
		//<------------------------------------------------------------------------处理头像图片结束
		//upload_url中传递的额外的参数，如果定义的method为get请换为$_GET
		$result["userid"]	= $_GET["userid"];
		//$result["username"]	= $_POST["username"];

		$result['msg'] = $msg;
		if ($success_num > 0)
		{
			$result['success'] = true;
		}
		//返回图片的保存结果（返回内容为json字符串）
		print json_encode($result);

		/**************************************************************
		*  生成指定长度的随机码。
		*  @param int $length 随机码的长度。
		*  @access public
		**************************************************************/
		function createRandomCode($length)
		{
			$randomCode = "";
			$randomChars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			for ($i = 0; $i < $length; $i++)
			{
				$randomCode .= $randomChars { mt_rand(0, 35) };
			}
			return $randomCode;
		}

		/**************************************************************
		*  将物理路径转为虚拟路径。
		*  @param string $physicalPpath 物理路径。
		*  @access public
		**************************************************************/
		function toVirtualPath($physicalPpath)
		{
			$virtualPath = str_replace($_SERVER['DOCUMENT_ROOT'], "", $physicalPpath);
			$virtualPath = str_replace("\\", "/", $virtualPath);
			return $virtualPath;
		}
	}

//修改手机号
	public function xg_phone(){
		$x_phone=Input::get('x_phone');
		$x_pwd=Input::get('x_pwd');
		$arr = DB::table('y_user')->where('uid', session('uid'))->first();
		$uid=session('uid');
		if($arr['upwd']==md5($x_pwd)){
			$arr=DB::update("update y_user set uphone ='".$x_phone."' where uid = $uid");
			echo"<script>alert('修改成功'); location.href='edit_phone'</script>";
		}else{
			echo"<script>alert('您输的密码不正确，请重新输入'); location.href='edit_phone'</script>";
		}

	}
	//显示绑定银行卡页面
	public function bank(){
		$uid=session('uid');
		$address=DB::table('y_address')->get();
		$arr=DB::table('y_user')->Join('y_money', 'y_user.uid', '=', 'y_money.uid')->where('y_user.uid',$uid)->first();
		//print_r($arr);die;
		return view("user/bank",['address'=>$address,'arr'=>$arr]);
	}

	//更新(绑定)银行卡
	public function bang_bank(){
		$uid=session('uid');
		$address=DB::table('y_address')->get();
		$banknum=Input::get('banknum');
		$bankname=Input::get('bankname');
		$zhname=Input::get('zhname');
		$u_id=Input::get('uid');
		$money="0.00";
		//echo $u_id;die;
		if(!empty($u_id)){
			DB::table('y_money')->where('uid', $u_id)->update(array('banknum' => $banknum, 'bankname' => $bankname,'zhname' => $zhname));
			echo "<script>alert('更新成功');location.href='/bank'</script>";
		}else{
			$er=DB::table('y_money')->insert(array('uid' => $uid, 'money' =>$money,'banknum' => $banknum, 'bankname' => $bankname,'zhname' => $zhname));
			if($er){
			echo "<script>alert('绑定成功');location.href='/bank'</script>";
			}
		}
	}
}