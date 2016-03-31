<?php namespace todoparrot\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

//	/**
//	 * Show the application welcome screen to the user.
//	 *
//	 * @return Response
//	 */
//	public function index()
//	{
//		return view('welcome');
//	}

	public function index()
	{

//		$items = array(
//			'items' => [
//				'Pack luggage',
//				'Go to airport',
//				'Arrive in San Juan'
//			]
//		);
//
//		\Log::debug($items);
//
//		\Log::info('Just an informational message.');
//		\Log::warning('Something may be going wrong.');
//		\Log::error('Something is definitely going wrong.');
//		\Log::critical('Danger, Will Robinson! Danger!');
//
//		dd($items);
		return view('welcome');
	}

}
