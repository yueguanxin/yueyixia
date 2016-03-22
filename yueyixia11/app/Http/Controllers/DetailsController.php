<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class DetailsController extends Controller {
	public function index(){
		header("content-type:text/html;charset=utf-8");
		//接收景点ID
		$id=$_GET['vid'];
		//echo $id;
		//默认景点ID为1
		//$id=1;
		$users = DB::table('y_view')->join('y_address', 'y_address.aid', '=', 'y_view.aid')->join('y_ticket', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_view.vid'=>$id])->get();
		$arr = DB::table('y_comment')->join('y_view', 'y_comment.vid', '=', 'y_view.vid')->join('y_user', 'y_comment.uid', '=', 'y_user.uid')->where(['y_comment.vid'=>$id])->get();
		//print_r($users);die;
		return view("details/index",['user'=>$users,'arr'=>$arr]);
	}
}

