<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class viewController extends Controller {
	public function index(){
		$arr=DB::table("y_view")->limit("8")->get();
		$brr=DB::table("y_view")->limit("3")->get();
		//print_r($arr);
		return view('view/index',['arr'=>$arr,'brr'=>$brr]);
	}
}