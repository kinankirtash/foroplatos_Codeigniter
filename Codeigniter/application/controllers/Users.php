<?php

class Users extends CI_Controller
{
	public function saludar()
	{
		$this->load->model('users_model', 'UM', true);
		$data['usuario'] = $this->UM->getAll();
		$this->load->view('usersHello.php', $data);
	}
}
