<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Validation\Validation;

class UserModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'user';
	protected $primaryKey           = 'nik';
	protected $useAutoIncrement     = false;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nik', 'telp', 'email', 'nama', 'alamat', 'tgl_lahir', 'password'];

	// Validation
	protected $validationRules      = [
		'nik' => 'required|is_unique[user.nik]|numeric',
		'telp' => 'required|is_unique[user.telp]|numeric',
		'email' => 'required|is_unique[user.email]|valid_email',
		'nama' => 'required|alpha_space',
		'alamat' => 'required',
		'tgl_lahir' => 'required',
		'password' => 'required',
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function insertUser($userData)
	{
		if (!$this->validate($userData)) {
			return $this->validator;
		} else {
			$inserData = [
				'nik' => $userData['nik'],
				'telp' => $userData['telp'],
				'email' => $userData['email'],
				'nama' => $userData['nama'],
				'alamat' => $userData['alamat'],
				'tgl_lahir' => $userData['tgl_lahir'],
				'password' => password_hash($userData['password'], PASSWORD_BCRYPT),
			];

			return $this->insert($inserData, true);
		}
	}
}
