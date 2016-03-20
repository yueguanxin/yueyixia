<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class ChatController extends Controller {
	public function index(){
		return view('chat/index');
	}
}