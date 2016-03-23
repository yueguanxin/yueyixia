<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class RegisterController extends Controller {
	public function register(){
		return view("register/register");
	}

	public function registered(){
		return view("register/registered");
	}
}