<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friend extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/Friend_model");
		is_logged_in();
	}

	public function index()
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		$data['all_users'] = $this->Friend_model->all_user();
		$data['title'] = "Roften - Friends";
		$this->load->view('layouts/user/header', $data);
		$this->load->view('layouts/user/navbar', $data);
		$this->load->view('pages/user/friend/index', $data);
		$this->load->view('layouts/user/footer');
	}
	
}
