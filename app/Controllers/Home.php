<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'SMS Gateway | Dashboard'
		];
		// return view('welcome_message');
		echo view('/pages/header', $data);
		echo view('/pages/body');
		echo view('/pages/footer');
	}

	public function contact()
	{
		$data = [
			'title' => 'SMS Gateway | Contact'
		];
		// return view('welcome_message');
		echo view('/pages/header', $data);
		echo view('contact');
		echo view('/pages/footer');
	}

	public function about()
	{
		$data = [
			'title' => 'SMS Gateway | About Me'
		];
		// return view('welcome_message');
		echo view('/pages/header', $data);
		echo view('about');
		echo view('/pages/footer');
	}
	//--------------------------------------------------------------------

}
