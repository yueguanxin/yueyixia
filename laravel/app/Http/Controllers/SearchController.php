<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class SearchController extends Controller {
	public function index(){
		$aid=1;
		//$aid=$_GET['aid'];
		$view = DB::table('y_view')->where(['aid'=>$aid])->get();
		//print_r($view);die;
		return view('search/index',['view'=>$view]);
	}
}