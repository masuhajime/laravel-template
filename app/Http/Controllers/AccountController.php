<?php namespace App\Http\Controllers;

class AccountController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
    
	public function getList()
	{
		return view('account/list', [
            'users' => \App\User::all(),
        ]);
	}
    
	public function getIndex()
	{
		return view('account/list', [
            'users' => \App\User::all(),
        ]);
	}

}
