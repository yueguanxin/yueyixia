<?php 
namespace App\Http\Controllers;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
 
use Illuminate\Http\Request;
 
class ChatController extends Controller {
	public function index(){
		$uid=session('uid');
		$uname=session('name');
		//echo $uname;die;
		//echo $uid;die;
		$friend=DB::table('y_friend')->where(['y_friend.uid'=>$uid])->join('y_user','y_friend.u2id','=','y_user.uid')->get();
		//print_r($friend);die;
		//select * from `y_friend` inner join `y_user` on `y_friend`.`u2id` = `y_user`.`uid` where (`uid` = 29)
		$chat=DB::table('y_chat')->where(['u2id'=>$uid,'c_status'=>0])->get();
		//print_r($chat);die;
		$address=DB::table('y_address')->get();
		//$aid=empty($_GET['aid'])?0:$_GET['aid'];
		//$aname=DB::table('y_address')->where(['aid'=>$aid])->first();
		return view('chat/index',[
			'address'=>$address,
			'friend'=>$friend,
			'uname'=>$uname,
			'chat'=>$chat
		]);
	}

	public function c_add(){
		$arr=$_GET;
		//print_r($arr);die;
		//$uid=$arr['uid'];
		$uid=DB::table('y_user')->where(['uname'=>$arr['uid']])->pluck('uid');
		$u2id=DB::table('y_user')->where(['uname'=>$arr['u2id']])->pluck('uid');
		//print_r($u2id);die;
		$info=DB::table('y_chat')->insert(['uid'=>$uid,'u2id'=>$u2id,'c_content'=>$arr['content'],'c_time'=>$arr['time']]);
		if(!$info){
			return 0;
		}
		return 1;
	}

	public function c_select(){
		//echo "11111";die;
		$uid=session('uid');
		$uname=session('name');
		$u2name=$_GET['u2id'];
		//echo $u2name;die;
		$u2id=DB::table('y_user')->where(['uname'=>$u2name])->pluck('uid');
		//echo $u2id;die;
		$chat=DB::table('y_chat')->where(['y_chat.uid'=>$uid,'y_chat.u2id'=>$u2id,'c_status'=>0])->orwhere(['y_chat.uid'=>$u2id,'y_chat.u2id'=>$uid,'c_status'=>0])->join('y_user','y_chat.uid','=','y_user.uid')->get();
		//print_r($chat);die;
		//$friend=DB::table('y_friend')->where(['y_friend.uid'=>$uid])->join('y_user','y_friend.u2id','=','y_user.uid')->get();
		DB::table('y_chat')->where(['uid'=>$uid,'u2id'=>$u2id])->orwhere(['uid'=>$u2id,'u2id'=>$uid])->update(['c_status'=>1]);
		$i="";
		foreach($chat as $k=>$v){
			if($v['uid']==$uid){
				$i.="<div class='message clearfix'><div class='user-logo'><img src='js/chat/img/head/".$v['uimg']."'/>"."</div>"."<div class='wrap-text'>"."<h5 class='clearfix'>".$v['uname']."</h5>"."<div>".$v['c_content']."</div>"."</div>"."<div class='wrap-ri'>"."<div clsss='clearfix'><span>".$v['c_time']."</span></div>"."</div>"."<div style='clear:both;'></div>"."</div>";
			}else if($v['uid']==$u2id){
				$i.="<div class='message clearfix'><div class='user-logo'><img src='js/chat/img/head/".$v['uimg']."'/>"."</div>"."<div class='wrap-text'>"."<h5 class='clearfix'>".$v['uname']."</h5>"."<div>".$v['c_content']."</div>"."</div>"."<div class='wrap-ri'>"."<div clsss='clearfix'><span>".$v['c_time']."</span></div>"."</div>"."<div style='clear:both;'></div>"."</div>";
			}
		}
		return $i;
		//return json_encode($i);
		//return $chat;
		/*return view('chat/chatright',[
			'chat'=>$chat,
			'friend'=>$friend
		]);*/
	}

	public function c_unread(){
		$uid=session('uid');
		$uname=session('name');
		//echo $uname;die;
		//echo $uid;die;
		$friend=DB::table('y_friend')->where(['y_friend.uid'=>$uid])->join('y_user','y_friend.u2id','=','y_user.uid')->get();
		//print_r($friend);die;
		//select * from `y_friend` inner join `y_user` on `y_friend`.`u2id` = `y_user`.`uid` where (`uid` = 29)
		$chat=DB::table('y_chat')->where(['u2id'=>$uid,'c_status'=>0])->get();
		/*$html="<ul>";
		foreach($friend as $fk=>$fv){
			$i=0;
			foreach($chat as $ck=>$cv){
				if($fv['uid']==$cv['uid']){
					$i++;
				}
			}
			$html.='<li><label class="online"></label><a href="javascript:;"><img src="js/chat/img/head/'.$fv["uimg"].'"></a><a href="javascript:;" class="chat03_name">'.$fv["uname"].'</a>';
			if($i!=0){
				$html.='<span class="unread" value="1" style="margin-left:50px;line-height:29px;color:#33ccff">(未读消息：'.$i.')</span>';
			}
			$html.="</li>";
		}
		$html.="</ul>";
		return $html;*/
		return view('chat/chatright',[
			'chat'=>$chat,
			'friend'=>$friend
		]);
	}
}