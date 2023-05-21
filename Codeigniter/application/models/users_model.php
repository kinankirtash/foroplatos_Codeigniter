<?php

class users_model extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->get('usuario');
		$users = $query->result_array();

		return $users;
	}

	public function insertData($name, $nick, $email, $tlf, $password)
	{
		$newUser = [
			'nombre' => $name,
			'nick' => $nick,
			'email' => $email,
			'telefono' => $tlf,
			'contrasenia' => password_hash($password, PASSWORD_BCRYPT),
		];
		$this->db->insert('usuario', $newUser);
	}

	public function searchUser($nick)
	{
		$query = $this->db->get_where('usuario', ['nick' => $nick]);
		$user = $query->result_array();

		return $user;
	}

	public function deleteUser($nick)
	{
		
	}
}
