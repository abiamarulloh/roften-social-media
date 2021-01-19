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
            redirect('');
        }
		// Membuat Rules
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email',[
			'required' => "Email address harus dilengkapi dengan benar"
		]);
		$this->form_validation->set_rules('password', 'password', 'required|trim',[
			'required' => "Password harus dilengkapi dengan benar",
		]);
	

		if($this->form_validation->run() == false) {
			$data['title'] = "Login";
			$this->load->view('layouts/header',$data);
			$this->load->view('auth/navbar',$data);
			$this->load->view('auth/index');
			$this->load->view('layouts/footer');
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
						<strong> Maaf kawan, Password yang kamu masukkan salah, silahkan periksa kembali ! </strong>
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
					<strong> Maaf kawan, anda belum Memverifikasi email, silahkan buka email kamu ! </strong>
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
				<strong> Maaf kawan, anda belum terdaftar di roften. </strong>
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
		$this->form_validation->set_rules('fullname', 'fullname', 'required|trim',[
			'required' => "Nama lengkap harus dilengkapi dengan benar"
		]);
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]',[
			'required' => "Email address harus dilengkapi dengan benar",
			'is_unique' => "Email yang anda pakai telah terdaftar diroften"
		]);
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]',[
			'required' => "Password harus dilengkapi dengan benar",
			'min_length' => "Password tidak boleh kurang dari 6 karakter"
		]);
		$this->form_validation->set_rules('confirmpassword', 'confirmpassword', 'required|matches[password]',[
			'required' => "Confirm Password harus dilengkapi dengan benar",
			'matches' => "Confirm password tidak sesuai"
		]);

		if($this->form_validation->run() == false) {
			$data['title'] = "Register";
			$this->load->view('layouts/header',$data);
			$this->load->view('auth/navbar',$data);
			$this->load->view('auth/register');
			$this->load->view('layouts/footer');
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
					<strong> Selamat anda berhasil mendaftar di roften, silahkah login ! </strong>
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
			<strong> Kamu telah Logout dari roften.  </strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
				</button>
			</div>
		');
		redirect("login");
	}

	
}
