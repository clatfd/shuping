<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Model Bindings */
Route::model('post', 'Post');
Route::model('comment', 'Comment');

//Route::get('/', 'HomeController@showWelcome');
// Route::post('/post/{post}/comment', ['as' => 'application.new', 'uses' => 'HomeController@fillapplication']);

Route::get('/', 'HomeController@login');
Route::get('login', 'HomeController@login');
//Route::get('basicinfo', 'HomeController@basicinfo');
Route::get('uploadfiles', 'HomeController@uploadfiles');



Route::get('basicinfo', function()
{
	$applications=Application::where('serialnum','=','123')->first();
	$applyrecords=Applyrecord::where('serialnum', '=', '123')->count();
	if($applyrecords){
		$applybtncontrol='disabled';
		$applystate='已申请';
	}
	else{
		$applybtncontrol='';
		$applystate='申请';
	}
	return View::make('applicant.basicinfo')->with('applications', $applications)->with('applybtncontrol', $applybtncontrol)->with('applystate', $applystate);

});

Route::post('basicinfo', function()
{
	$serialnum = '123';//$.COOKIE('serialnum');
	$spjxj = Input::get('spjxj');
	$spzxj = Input::get('spzxj');
	$chjxj = Input::get('chjxj');
	$year  = Input::get('year');
	if($spjxj){
		$applyrecord = new Applyrecord;
		$applyrecord->serialnum =$serialnum;
		$applyrecord->year =$year;
		$applyrecord->type = '叔蘋奖学金';
		$applyrecord->isawarded = '否';
		$applyrecord->isextraawarded = '否';
		$applyrecord->save();
	}
	if($spzxj){
		$applyrecord = new Applyrecord;
		$applyrecord->serialnum =$serialnum;
		$applyrecord->year =$year;
		$applyrecord->type = '叔蘋助学金';
		$applyrecord->isawarded = '否';
		$applyrecord->isextraawarded = '否';
		$applyrecord->save();
	}
	if($chjxj){
		$applyrecord = new Applyrecord;
		$applyrecord->serialnum =$serialnum;
		$applyrecord->year =$year;
		$applyrecord->type = '彩虹奖学金';
		$applyrecord->isawarded = '否';
		$applyrecord->isextraawarded = '否';
		$applyrecord->save();
	}
	return "<script>alert('ok!');history.go(-1);document.location.reload()</script>";
});

Route::get('fillapplication',  function()
{	
	$applications = Application::where('serialnum','=','123')->get();
	return View::make('applicant.fillapplication')->with('applications', $applications);
});
Route::post('fillapplication',  function()
{	
	$application = Application::where('serialnum','=','123')->delete();

	$application = new Application;
	$application->serialnum = '123';
	$application->name = Input::get('name');
	$application->gender = Input::get('gender');
	$application->birthday = Input::get('birthday');
	$application->firstschool = Input::get('firstschool');
	$application->address = Input::get('address');
	$application->zipcode = Input::get('zipcode');
	$application->email = Input::get('email');
	$application->mobile = Input::get('mobile');
	$application->familycontact = Input::get('familycontact');
	$application->familyphone = Input::get('familyphone');
	$application->school = Input::get('school');
	$application->grade = Input::get('grade');
	$application->major = Input::get('major');
	$application->position = Input::get('position');
	$application->award = Input::get('award');
	$application->summary = Input::get('summary');
	$application->save();
	return "<script>alert('ok!');history.go(-1);document.location.reload()</script>";

});

Route::get('applyrecord',  function ()
{
	$applyrecords=Applyrecord::where('serialnum', '=', '123')->get();
    return View::make('applicant.applyrecord')->with('applyrecords', $applyrecords);
});

Route::get('addresslist', function(){
	return View::make('applicant.addresslist');
});


Route::get('generalview', function()
{
	$applicationnum=Applyrecord::all()->count();
	return View::make('admin.generalview')->with('applicationnum',$applicationnum);
});

Route::get('query', function()
{
	$application = Application::where('serialnum','=','123')->first();
	$applyrecord = Application::where('serialnum','=','123')->first();
	$queryrecords=array(array('serialnum'=>'123','name'=> $application->name,'school'=>$application->school));
	$application->studentid;
	$applyrecord->isawarded;
	$applyrecord->money;
   return View::make('admin.query')->with('queryrecords',$queryrecords);

});

Route::get('firsttrial', function()
{
	$applications = Application::where('serialnum','=','123')->get();
	$serialnum=$applications[0]->serialnum;
	$applyrecord=Applyrecord::where('serialnum','=',$serialnum)->first();
	$firsttrialresult=$applyrecord->isawarded;
	if($firsttrialresult=='初审通过')
		$ftr='pass';
	else if($firsttrialresult=='初审未通过')
		$ftr='fail';
	else
		$ftr='not';
	return View::make('admin.firsttrial')->with('applications',$applications)->with('ftr',$ftr);
});
Route::post('firsttrial', function()
{
	$trialresult=Input::get('trialresult');
	$applyrecord = Applyrecord::where('serialnum','=','123')->first();
	$id=$applyrecord->id;
	$applyrecord = Applyrecord::find($id);
	if($trialresult=='pass')
		$applyrecord->isawarded = '初审通过';
	else if($trialresult=='fail')
		$applyrecord->isawarded = '初审未通过';
	$applyrecord->save();

	$application = Application::where('serialnum','=','123')->first();
	$id=$application->id;
	$application = Application::find($id);
	$application->studentid = Input::get('studentid');
	$application->save();
	return "<script>alert('ok!');history.go(-1);document.location.reload()</script>";

});

Route::get('trial', function(){
	$applications = Application::where('serialnum','=','123')->get();
	$serialnum=$applications[0]->serialnum;
	$applyrecord=Applyrecord::where('serialnum','=',$serialnum)->first();
	$trialresult=$applyrecord->isawarded;
	if($trialresult=='初审通过'){
		$ftr='pass';
		$tresult='not';
	}
	else if($trialresult=='初审未通过'){
		$ftr='fail';
		$tresult='not';
	}
	else if($trialresult=='审核通过'){
		$ftr='pass';
		$tresult='pass';
	}
	else if($trialresult=='审核未通过'){
		$ftr='pass';
		$tresult='fail';
	}
	else{
		$ftr='not';
		$tresult='not';
	}
	return View::make('admin.trial')->with('applications',$applications)->with('applyrecord',$applyrecord)->with('ftr',$ftr)->with('tresult',$tresult);
});
Route::post('trial', function()
{
	$trialresult=Input::get('trialresult');
	$applyrecord = Applyrecord::where('serialnum','=','123')->first();
	$id=$applyrecord->id;
	$applyrecord = Applyrecord::find($id);
	if($trialresult=='pass')
		$applyrecord->isawarded = '审核通过';
	else if($trialresult=='fail')
		$applyrecord->isawarded = '审核未通过';
	$applyrecord->money=Input::get('money');
	$applyrecord->isextraawarded=Input::get('specialaward');
	$applyrecord->save();

	$application = Application::where('serialnum','=','123')->first();
	$id=$application->id;
	$application = Application::find($id);
	$application->studentid = Input::get('studentid');
	$application->save();
	return "<script>alert('ok!');history.go(-1);document.location.reload()</script>";

});

Route::get('giveid', function(){
	$applications = Application::where('serialnum','=','123')->get();
	return View::make('admin.giveid')->with('applications', $applications);
});
Route::post('giveid', function(){
	$application = Application::where('serialnum','=','123')->first();
	$id=$application->id;
	$application = Application::find($id);
	$application->studentid = Input::get('studentid');
	$application->save();
	return "<script>alert('ok!');history.go(-1);document.location.reload()</script>";

});
