<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/', 'IndexController@index');
/*岳冠新*/
Route::get('chat', 'ChatController@index');//聊天
Route::get('chat_add', 'ChatController@c_add');//聊天记录
Route::get('chat_select', 'ChatController@c_select');//聊天查询
Route::get('chat_unread', 'ChatController@c_unread');//查询聊天消息未读
Route::get('search', 'SearchController@index');//查询
Route::get('check', 'SearchController@check');  //详细查询
Route::get('collection','CollectionController@index');//我的收藏
Route::get('collection_add', 'CollectionController@c_add'); //添加收藏
Route::get('collection_delete', 'CollectionController@c_del'); //添加收藏
/*赵杰*/
Route::get('view', 'viewController@index');//详情二级页面
Route::get('money','MoneyController@index');//我的钱包
Route::get('xianjin','MoneyController@xianjin');//我的钱包-------现金
Route::get('youhuiquan','MoneyController@youhuiquan');//我的钱包-------优惠券
Route::any('bank','UserController@bank');//我的钱包------银行卡
Route::any('bang_bank','UserController@bang_bank');//绑定银行卡
Route::get('feedback', 'FeedbackController@index');//回馈
Route::get('details','DetailsController@index');//景点详情
/*吕慧峰*/
Route::any('order','OrderController@index');//生成订单页面
Route::any('lists','OrderController@lists');//订单详情页
Route::any('myorder','OrderController@myorder');//我的订单
Route::any('dorder','OrderController@dorder');//删除订单
Route::any('page','DetailsController@page');//添加点击量
Route::any('pay','OrderController@pay');//订单支付
Route::get('npay','DetailsController@npay');//未支付
Route::get('all','DetailsController@all');//订单全部
Route::get('nform','DetailsController@nform');//未发货订单
Route::get('ninfo','DetailsController@ninfo');//待收货订单
Route::get('ncon','DetailsController@ncon');//待评论订单
Route::get('kong','DetailsController@kong');//无订单
Route::get('addcon','DetailsController@addcon');//评论
Route::get('like','LikeController@index');//大家喜欢
/*刘亚丹*/
Route::any('login','IndexController@login');//登陆
Route::any('yanzhengma/{tmp}','IndexController@yanzhengma');
Route::any('register','IndexController@register');//注册
Route::any('tel_one','IndexController@tel_one');
Route::any('callback','IndexController@callback');//微博登陆
Route::any('edit','UserController@edit');//用户设置------修改个人资料
Route::any('edit_add','UserController@edit_add');
Route::any('name_one','UserController@name_one');
Route::any('edit_avatar','UserController@edit_avatar');//用户设置-------更改头像
Route::any('edit_pwd','UserController@edit_pwd');//用户设置-------修改密码
Route::any('pwd_update','UserController@pwd_update');
Route::any('edit_phone','UserController@edit_phone');//用户设置-------修改手机号
Route::any('edit_email','UserController@edit_email');//用户设置-------绑定邮箱
Route::get('send','UserController@send');
Route::get('email_add','UserController@email_add');
Route::any('sms','IndexController@sms');//注册时的短信验证码
Route::any('upload','UserController@upload');//注册时的短信验证码
Route::any('logout','IndexController@logout');//退出
Route::any('upload_add','UserController@upload_add');//上传头像
Route::any('wang_pwd','IndexController@wang_pwd');//忘记密码
Route::any('xg_phone','UserController@xg_phone');//修改手机号


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
