<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Auth_model");
	}

	public function index()
	{
		if($this->session->has_userdata('email') == true){
            redirect('home');
        }
		// Membuat Rules
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == false) {
			$data['title'] = "Login - Roften";
			$this->load->view('layouts/user/header',$data);
			$this->load->view('auth/navbar',$data);
			$this->load->view('auth/index');
			$this->load->view('layouts/user/footer');
		}else{
			// Jika Berhasil
			return $this->_login();
		}
	}

	// Login Fungsi
	private function _login(){
		if($this->session->has_userdata('email') == true){
            redirect('');
        }
		$email 		= $this->input->post("email");
		$password 	= $this->input->post("password");

		// Mengambil data dari database
		$user = $this->db->get_where("user", ['email' => $email])->row_array(); 

		// Jika email tersedia
		if($user['email']){
			// Jika emailnya telah diverrifikasi
			if($user['is_actived'] == 1){
				// Cek password
				if(password_verify($password, $user['password'])){
					$data = [
						'email' 	=> $user['email'],
						'role_id' 	=> $user['role_id'],
					];
					$this->session->set_userdata($data);
					redirect("");
				}else{
					//Jika password salah
					$this->session->set_flashdata("auth", '
					<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
						<strong> Sorry, your email / password is invalid, please check again! </strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					');
					redirect("login");
				}
			}else{
				// Jika email belum diverifikasi
				$this->session->set_flashdata("auth", '
				<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
					<strong>sorry, your account has not been verified, please check email! </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				');
				redirect("login");
			}

		}else {
			// Jika tidak ada email yang terdaftar
			$this->session->set_flashdata("auth", '
			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
				<strong> sorry, you are not registered with roften </strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
		 	');
		 	redirect("login");
		}

	}

	public function register()
	{	
	    if($this->session->has_userdata('email') == true){
                redirect('');
            }
		// Membuat Rules
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');

		if($this->form_validation->run() == false) {
			$data['title'] = "Register - Roften";
			$this->load->view('layouts/user/header',$data);
			$this->load->view('auth/navbar',$data);
			$this->load->view('auth/register');
			$this->load->view('layouts/user/footer');
		}else{
			$username = explode("@", $this->input->post("email", true));
			$username = $username[0];
			// Jika Berhasil
			$data = [
				"fullname"	 	=> htmlspecialchars($this->input->post("fullname", true)),
				"username"	 	=> htmlspecialchars($username),
				"image"			=> "default.jpg",
				"email" 		=> htmlspecialchars($this->input->post("email", true)),
				"password" 		=> htmlspecialchars(password_hash($this->input->post("confirmpassword", true), PASSWORD_DEFAULT)),
				"role_id"		=> 2,
				"is_actived" 	=> 1,
				"date_created" 	=> time()
			 ];
			
			 // ekseskusi didalam model insertUser  
			 $this->Auth_model->insertUser($data);
			 $this->session->set_flashdata("auth", '
				<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
					<strong> congratulations, your account registration was successful, please login! </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
			 ');
			 redirect("login");
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("email");
		$this->session->unset_userdata("role_id");

		$this->session->set_flashdata("auth", '
		<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
			<strong> You have logged out of roften  </strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
				</button>
			</div>
		');
		redirect("login");
	}

	
}
