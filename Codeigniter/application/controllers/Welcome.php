<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 *
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		session_start();
		$this->load->view('welcome_message');
	}

	public function test()
	{
		$this->load->model('users_model', 'UM', true);
		//$this->UM->insertData('uno', 'uno', 'uno@email.com', 666666666, 'uno');
		var_dump($this->UM->getAll());
		echo "<br><br>";
		//var_dump($this->UM->searchUser('uno'));
		//$this->load->view('hola');

	}
}
