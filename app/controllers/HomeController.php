<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		//return View::make('hello');
			return View::make('greet', array('name' => 'Taylor'));

	}

	 /**
     * The layout that should be used for responses.
     */
    //protected $layout = 'layouts.login';
    protected $layout = 'frame';

    /**
     * Show the user profile.
     */ 

        //$this->layout->content = View::make('layouts.login',array('name' => 's'));
        //$this->layout->content = View::make('layouts.basicinfo');
        //$this->layout->content = View::make('layouts.applyrecord');
        //$this->layout->content = View::make('layouts.addresslist');
        //$this->layout->content = View::make('layouts.fillapplication');
        //$this->layout->content = View::make('layouts.uploadfiles');
        //$this->layout->content = View::make('layouts.generalview');
        //$this->layout->content = View::make('layouts.query');
        //$this->layout->content = View::make('layouts.firsttrial');
        //$this->layout->content = View::make('layouts.trial');
    public function login()
    {
//        $cookie = Cookie::make('name', 'value');

        return View::make('layouts.login');
    }
    public function basicinfo()
    {
        $this->layout->content = View::make('layouts.basicinfo');
    }
   
    
    public function fillapplication()
    {
        $this->layout->content = View::make('layouts.fillapplication');
    }
    public function uploadfiles()
    {
        $this->layout->content = View::make('layouts.uploadfiles');
    }
   
  
 
    

    public function newapply(){
        echo "ok";
    }
/*
    public function fillapplicationnew()
    {
        $comment = [
            'commenter' => Input::get('name'),
            'email' => Input::get('gender'),
            'comment' => Input::get('gender'),
        ];
    if($comment['email']!=null){
        $rules = [
            'commenter' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ];
        $valid = Validator::make($comment, $rules);
        if ($valid->passes()) {
            $comment = new Comment($comment);
            $comment->approved = 'no';
           
            /* redirect back to the form portion of the page */
    /*        return Redirect::to(URL::previous() . '#replys'.$comment['email'])
                ->with('success', 'Comment has been submitted and waiting for approval!');
        } else {
            return Redirect::to(URL::previous() . '#reply')->withErrors($valid)->withInput();
        }
     }   
     else{

       $this->layout->content = View::make('layouts.fillapplication');
        }
    }
    */
}
