<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U extends CI_Controller {

	public function profile($username){
		$data['user'] = $this->db->get_where("user", ['username' => $username])->row_array();
		$fullname = $data['user']['fullname'];
		$data['title'] = $fullname;
		$this->load->view("u/header", $data);
		$this->load->view("u/navbar", $data);
		$this->load->view("u/profile", $data);
		$this->load->view("u/footer", $data);
	}


	public function index()
	{
		// Mengambil data user by email
		$data['uA'] = $this->db->get("user")->result_array();
		$data['title'] = "Home";
		$this->load->view("u/header", $data);
		$this->load->view("u/navbar", $data);
		$this->load->view("u/index", $data);
		$this->load->view("u/footer", $data);
	}

}
