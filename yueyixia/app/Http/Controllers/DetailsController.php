<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class DetailsController extends Controller {
	public function index(){
		//接收景点ID
		$id=$_GET['vid'];
		//默认景点ID为1
		//$id=1;
		$users = DB::table('y_view')->join('y_address', 'y_view.aid', '=', 'y_address.aid')->join('y_ticket', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_view.vid'=>$id,])->get();
		$arr = DB::table('y_comment')->join('y_view', 'y_comment.vid', '=', 'y_view.vid')->join('y_user', 'y_comment.uid', '=', 'y_user.uid')->where(['y_comment.vid'=>$id])->get();

		$address=DB::table('y_address')->get();
		//print_r($address);die;
		return view("details/index",['user'=>$users,'arr'=>$arr,'address'=>$address]);
	}
	public function page(){
		$arr = DB::table('y_order')->where(['y_comment.vid'=>$id])->get();
	}
}

