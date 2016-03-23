<?php 
namespace App\Http\Controllers;
/*
	岳冠新
*/
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class CollectionController extends Controller {
	public function index(){
		if(empty(session('name'))){
			echo "<script>alert('请先登录')</script>";die;
		}
		$username=session('name');
		$user=DB::table('y_user')->where(['uname'=>$username])->first();
		//print_r($user);die;
		//$uid=$user['uid'];
		$collection=DB::table('y_collection')->join('y_view','y_collection.vid','=','y_view.vid')->where(['uid'=>$user['uid']])->get();
		//print_r($collection);die;
		$address=DB::table('y_address')->get();

		return view('collection/index',[
			'address'=>$address,
			'collection'=>$collection
		]);
	}

	//收藏添加
	public function c_add(){
		if(empty(session('name'))){
			echo "<script>alert('请先登录')</script>";die;
		}
		$username=session('name');
		$user=DB::table('y_user')->where(['uname'=>$username])->first();
		//echo $user;die;
		$vid=$_GET['vid'];
		//echo $vid;die;
		$info=DB::table('y_collection')->where(['uid'=>$user['uid'],'vid'=>$vid])->first();
		//print_r($info);die;
		if($info){
			return 2;
		}
		$info1=DB::table('y_collection')->insert(['uid'=>$user['uid'],'vid'=>$vid]);
		if($info1){
			return 1;
		}
		return 0;
	}
	//无刷新收藏删除
	public function c_del(){
		$vid=$_GET['vid'];
		//echo $vid;die;
		$info=DB::table('y_collection')->where(['vid'=>$vid])->delete();
		echo $info;die;
		if(!$info){
			echo "<script>alert('删除失败！')</script>";
		}
		echo "<script>alert('删除成功！')</script>";
		return view('collection/c_del',['collection'=>$collection]); 
	}
}