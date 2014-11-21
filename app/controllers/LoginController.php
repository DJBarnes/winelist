<?php

class LoginController extends BaseController {

	public function getLogin()
	{
		return View::make('login');
	}

	public function postLoginAttempt()
	{
		$user = array('username' => Input::get('username'), 'password' => Input::get('password'));
		if(Auth::attempt($user))
		{
			return Redirect::to('/items');
		} else {
			return Redirect::to('/login')
				->with('error_message','Your Username / Password is incorrect');
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/login');
	}

}