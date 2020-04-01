<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
		is_logged_in();
	}

	public function index()
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		$data['userAll'] = $this->User_model->getAllUser();
		$data['title'] = "Roften - Home";
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/navbar',$data);
		$this->load->view('user/index', $data);
		$this->load->view('layouts/footer');
	}

	public function myprofile()
	{

		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

		// Membuat Rules
		$this->form_validation->set_rules('fullname', 'fullname', 'required|trim',[
			'required' => "Nama lengkap harus dilengkapi dengan benar"
		]);
		$this->form_validation->set_rules('profesi', 'profesi', 'required',[
			'required' => "Profesi harus dilengkapi dengan benar",
		]);
		$this->form_validation->set_rules('sekolah', 'sekolah', 'required',[
			'required' => "Sekolah harus dilengkapi dengan benar",
		]);
		$this->form_validation->set_rules('bio', 'bio', 'required',[
			'required' => "bio harus dilengkapi dengan benar",
		]);

		if($this->form_validation->run() == false) {
			$data['title'] = "My Profile";
			$this->load->view('layouts/header',$data);
			$this->load->view('layouts/navbar',$data);
			$this->load->view('user/myprofile');
			$this->load->view('layouts/footer');
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
				$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
				$config['max_size'] 		= '2048';

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
				}

			}
			
			 // ekseskusi didalam model insertUser  

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
			 redirect("user/setting");
		}
	}

	public function security()
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

		// Membuat Rules
		$this->form_validation->set_rules('currentPassword', 'currentPassword', 'required',[
			'required' => "Password lama harus di isi !"
		]);
		$this->form_validation->set_rules('password', 'password', 'required',[
			'required' => "Password Baru harus di isi !"
		]);
		$this->form_validation->set_rules('confirmpassword', 'confirmpassword', 'required',[
			'required' => "Confirm Password baru harus di isi !"
		]);
		

		if($this->form_validation->run() == false) {
			$data['title'] = "Security";
			$this->load->view('layouts/header',$data);
			$this->load->view('layouts/navbar',$data);
			$this->load->view('user/security');
			$this->load->view('layouts/footer');
		}else{
			$user = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

			// password baru
			$currentpassword = $this->input->post("currentPassword");
			if( password_verify($currentpassword, $user['password'] ) == $currentpassword ) {
				// Jika Berhasil
				$data = [
					"id"			=> htmlspecialchars($this->input->post("id", true)),
					"password"	 	=> htmlspecialchars(password_hash($this->input->post("confirmpassword", true), PASSWORD_DEFAULT)),
					'date_updated' 	=> time()
				 ];
				
				 // ekseskusi didalam model insertUser  
				 $this->User_model->UpdateUserSecurity($data);
				 $this->session->set_flashdata("message", '
					<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
						<strong> Selamat password anda telah diperbarui. </strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				 ');
				 redirect("user/security");
			}else{
				$this->session->set_flashdata("message", '
				<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
					<strong> Maaf kawan, password lama yang anda masukkan salah, tolong masukkan password yang benar ! </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
			 ');
			 redirect("user/setting");
			}
		}
	}

	public function medsos()
	{
			// Mengambil data user by email
			$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

			// Membuat Rules
			$this->form_validation->set_rules('whatsapp', 'whatsapp', 'numeric',[
				'numeric' => "Whatsapp harus dilengkapi dengan nomor telepon yang valid"
			]);
	
			if($this->form_validation->run() == false) {
				$data['title'] = "Medsos";
				$this->load->view('layouts/header',$data);
				$this->load->view('layouts/navbar',$data);
				$this->load->view('user/medsos');
				$this->load->view('layouts/footer');
			}else{
				// Jika Berhasil
				$data = [
					"id"			=> htmlspecialchars($this->input->post("id", true)),
					"whatsapp"	 	=> htmlspecialchars($this->input->post("whatsapp", true)),
					"instagram"	 	=> htmlspecialchars($this->input->post("instagram", true)),
					"facebook"	 	=> htmlspecialchars($this->input->post("facebook", true)),
					'date_updated' 	=> time()
				 ];
				
				 // ekseskusi didalam model insertUser  
				 $this->User_model->UpdateUserMedsos($data);
				 $this->session->set_flashdata("message", '
					<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
						<strong> Selamat anda berhasil Memperbarui Medsos Pribadi di roften. </strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
				 ');
				 redirect("user/setting");
			}
	}




	// Membuat fungsi User_profle dari setiap user ketika diklik
	public function user_profile($username)
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

		// Mengambil data user berdasarkan username
		$data['userByUsername'] = $this->db->get_where("user", ['username' => $username])->row();
		$data['title'] = "Roften - " .  $username;
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/navbar',$data);
		$this->load->view('user/user_profile', $data);
		$this->load->view('layouts/footer');
	}




	// Membuat chat user
	public function chat()
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		$data['userAll'] = $this->User_model->getAllUser();
		$data['title'] = "Roften - Chat";
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/navbar',$data);
		$this->load->view('user/chat', $data);
		$this->load->view('layouts/footer');
	}

	// Chat user
	public function chatUser($username){
		// Mengambil data receiver dari url
		$data['username'] 	= $username;
		
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

		// Mengambil data id user sender by username
		$data['friend'] = $this->db->get_where("user", ['username' => $username])->row_array();
		
		// Membuat variabel sender dan receiver untuk mendapatkan Id nya
		$data['chatAll'] 	= $this->User_model->userChat($data['user'], $data['friend'])->result_array();
		

		// Membuat Rules
		$this->form_validation->set_rules('messageUser', 'messageUser', 'required',[
			'required' => "Pesan harus di isi"
		]);

		if($this->form_validation->run() == false) {
			$data['title'] = "Chat - ". $username;
			$this->load->view('layouts/header',$data);
			$this->load->view('layouts/navbar',$data);
			$this->load->view('user/chatUser', $data);
			$this->load->view('layouts/footer');
		}else {
					// Jika Berhasil
				$data = [
					"sender_id"		=> htmlspecialchars($this->input->post("sender_id", true)),
					"receiver_id"	=> htmlspecialchars($this->input->post("receiver_id", true)),
					"message"		=> htmlspecialchars($this->input->post("messageUser", true)),
					'date_created' 	=> time()
				 ];
				
				 // ekseskusi didalam model insertUser  
				 $this->db->insert("chat",$data);
				 redirect("user/chatUser/" . $username );
		}

	}



	// Membuat Setting user 
	public function setting()
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		$data['title'] = "Roften - Chat";
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/navbar',$data);
		$this->load->view('user/setting', $data);
		$this->load->view('layouts/footer');
	}








	
}
