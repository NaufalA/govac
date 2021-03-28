<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;

class Auth extends BaseController
{
	public function register()
	{
		$userModel = new UserModel();
		$userData = $this->request->getPost();

		$insertRes = $userModel->insertUser($userData);
		if($insertRes)
		{
			return redirect()->to('/')->with('message', "Akun Berhasil Didaftarkan!");
		}
	}

	public function daftar()
	{
		return view('register');
	}

	public function masuk()
	{
		return view('login');
	}
}
