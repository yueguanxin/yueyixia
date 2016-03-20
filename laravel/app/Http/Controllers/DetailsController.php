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
		//$id=$_POST['vid'];
		$id=1;
		//$aname=$_POST['aname'];
		$aname=	"西城区";
		$users = DB::table('y_view')->join('y_address', 'y_view.vid', '=', 'y_address.aid')->join('y_ticket', 'y_view.vid', '=', 'y_ticket.vid')->where(['y_view.vid'=>$id,'aname'=>$aname])->get();
		//print_r($users);die;
		return view("details/index",['user'=>$users]);
	}
	/*public function index2(){
		echo 2;die;
		//return view("details/index2");
	}*/
}

