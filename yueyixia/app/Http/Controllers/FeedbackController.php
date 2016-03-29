<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class FeedbackController extends Controller {
	public function index(){
		$num = DB::table('y_user')->orderby('feedback_num','desc')->limit(8)->get();
		$wiki=DB::table('y_wiki')->limit(6)->get();
		$f_view=DB::table('y_feedback')->limit(3)->get();
		return view('feedback/index',['num'=>$num,'wiki'=>$wiki,'f_view'=>$f_view]);
	}
}