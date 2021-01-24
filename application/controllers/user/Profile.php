<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/Profile_model");
		is_logged_in();
	}

	public function index($username)
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		
		// Mengambil data id user sender by username
		$data['friend'] = $this->db->get_where("user", ['username' => $username])->row_array();

		// Get Post
		$data['user_posts'] = $this->Profile_model->get_user_post($username);

		$data['user_comments'] = $this->Profile_model->get_user_comments();

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('body', 'body', 'required');

		if($this->form_validation->run() == false) {
			$data['title'] = $data['friend'] ? $data['friend']['fullname'] : '';
			$this->load->view('layouts/user/header',$data);
			$this->load->view('layouts/user/navbar',$data);
			$this->load->view('pages/user/profile/index', $data);
			$this->load->view('layouts/user/footer', $data);
		}else {
			$data = [
				"user_id"		=> htmlspecialchars($this->input->post("user_id", true)),
				"title"			=> htmlspecialchars($this->input->post("title", true)),
				"body"			=> $this->input->post("body", true),
				'create_at' 	=> time()
			];
			$this->db->insert("post",$data);
			$this->session->set_flashdata("message", '
					<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
						<strong> Post baru berhasil ditambahkan. </strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					');
			redirect($username);
		}
	}

	public function profile()
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

		$username = explode("@", $data['user']['email']); 
		$username = $username[0];
		$data['username'] = $username;

		// Membuat Rules
		$this->form_validation->set_rules('fullname', 'fullname', 'required');

		if($this->form_validation->run() == false) {
			$data['title'] = "Setting - Profile";
			$this->load->view('layouts/user/header',$data);
			$this->load->view('layouts/user/navbar',$data);
			$this->load->view('pages/user/profile/setting', $data);
			$this->load->view('layouts/user/footer', $data);
		}else{
			$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
			
			// Jika Berhasil
			$id 			= htmlspecialchars($this->input->post("id", true));
			$fullname 		= htmlspecialchars($this->input->post("fullname", true));
			$username 		= htmlspecialchars($this->input->post("username", true));
			$profesi 		= htmlspecialchars($this->input->post("profesi", true));
			$sekolah	 	= htmlspecialchars($this->input->post("sekolah", true));
			$bio	 		= htmlspecialchars($this->input->post("bio", true));
			$date_updated	= time();

			//  Upload Gambar
			$upload_image  = $_FILES['image']['name'];
			
			if($upload_image){
				$config['upload_path'] 		= './assets/images/profile/';
				$config['allowed_types'] 	= 'jpg|png|jpeg';
				$config['max_size'] 		= 2048;
			
				$this->load->library("upload", $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload("image")){

					$old_image = $data['user']['image'];
					if($old_image != "default.jpg"){
						unlink(FCPATH . './assets/images/profile/' . $old_image);
					}

					$new_image = $this->upload->data("file_name");
					$this->db->set("image", $new_image);
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
			 		redirect("profile/setting");
				}
			}
				
			$this->db->set("id", $id);
			$this->db->set("fullname", $fullname);
			$this->db->set("username", $username);
			$this->db->set("profesi", $profesi);
			$this->db->set("sekolah", $sekolah);
			$this->db->set("bio", $bio);
			$this->db->set("date_updated", $date_updated);

			$this->db->where("id" , $id);
			$this->db->update("user");
			$this->session->set_flashdata("message", '
				<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
					<strong> Selamat anda berhasil Memperbarui detail diri di roften. </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
			');
			redirect("profile/setting");
		
		}
	}


	public function security()
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

		$username = explode("@", $data['user']['email']); 
		$username = $username[0];
		$data['username'] = $username;

		// Membuat Rules
		$this->form_validation->set_rules('currentPassword', 'currentPassword', 'required',[
			'required' => "Password lama harus di isi !"
		]);
		$this->form_validation->set_rules('password', 'password', 'required',[
			'required' => "Password Baru harus di isi !"
		]);
		$this->form_validation->set_rules('confirmpassword', 'confirm password', 'required',[
			'required' => "Confirm Password baru harus di isi !"
		]);
		

		if($this->form_validation->run() == false) {
			$data['title'] = "Setting - Profile";
			$this->load->view('layouts/user/header',$data);
			$this->load->view('layouts/user/navbar',$data);
			$this->load->view('pages/user/profile/setting');
			$this->load->view('layouts/user/footer');
		}else{
			$user = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

			// password baru
			$currentpassword = $this->input->post("currentPassword");
			if( password_verify($currentpassword, $user['password'] ) == $currentpassword ) {
				$id = $this->input->post("id", true);
				// Jika Berhasil
				$data = [
					"password"	 	=> htmlspecialchars(password_hash($this->input->post("confirmpassword", true), PASSWORD_DEFAULT)),
					'date_updated' 	=> time()
				 ];
				
				 // ekseskusi didalam model insertUser  
				 $this->User_model->update_security($data, $id);
				 $this->session->set_flashdata("message", '
					<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
						<strong> Selamat password anda telah diperbarui. </strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				 ');
				 redirect("setting/index");
			}else{
				$this->session->set_flashdata("message", '
				<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
					<strong> Maaf kawan, password lama yang anda masukkan salah, tolong masukkan password yang benar ! </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
			 ');
			 redirect("profile/setting");
			}
		}
	}

	public function medsos()
	{
			// Mengambil data user by email
			$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

			$username = explode("@", $data['user']['email']); 
			$username = $username[0];
			$data['username'] = $username;

			// Membuat Rules
			$this->form_validation->set_rules('whatsapp', 'whatsapp', 'numeric',[
				'numeric' => "Whatsapp harus dilengkapi dengan nomor telepon yang valid"
			]);
	
			if($this->form_validation->run() == false) {
				$data['title'] = "Setting - Profile";
				$this->load->view('layouts/user/header',$data);
				$this->load->view('layouts/user/navbar',$data);
				$this->load->view('pages/user/profile/setting');
				$this->load->view('layouts/user/footer');
			}else{
				// Jika Berhasil
				$id = $this->input->post("id", true);
				$data = [
					"whatsapp"	 	=> htmlspecialchars($this->input->post("whatsapp", true)),
					"instagram"	 	=> htmlspecialchars($this->input->post("instagram", true)),
					"facebook"	 	=> htmlspecialchars($this->input->post("facebook", true)),
					'date_updated' 	=> time()
				 ];
				
				 // ekseskusi didalam model insertUser  
				 $this->User_model->update_medsos($data, $id);
				 $this->session->set_flashdata("message", '
					<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
						<strong> Selamat anda berhasil Memperbarui Medsos Pribadi di roften. </strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				 ');
				 redirect("profile/setting");
			}
	}
}
