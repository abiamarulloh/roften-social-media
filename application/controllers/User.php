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
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		$data['users'] = $this->User_model->all_user();
		$data['users_posts'] = $this->User_model->get_users_posts();

		$username = explode("@", $data['user']['email']); 
		$username = $username[0];
		$data['username'] = $username;

		$data['user_comments'] = $this->User_model->get_user_comments();
		$data['title'] = "Roften - Home";
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/navbar',$data);
		$this->load->view('user/index', $data);
		$this->load->view('layouts/footer');
		
	}

	public function comment() 
	{
		$this->form_validation->set_rules('comment', 'comment', 'required');
		if($this->form_validation->run() == false) { 
			echo validation_errors();
		}else {
			$data = [
				"post_id"		=> htmlspecialchars($this->input->post("post_id", true)),
				"user_id"		=> htmlspecialchars($this->input->post("user_id", true)),
				"comment"		=> htmlspecialchars($this->input->post("comment", true)),
				'create_at' 	=> time()
			];
			$result = $this->db->insert("comment", $data);
			if($result) {
				$alert = "Comment successfull add";
				echo $alert;
			}
		}
	}


	public function commentList($current_post_id) 
	{
		$user = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		$user_comments = $this->User_model->get_user_comment_by_post($current_post_id);
		foreach($user_comments as $user_comment) :
				$conditionAccess = $user_comment["username"] == $user["username"] ? "" : "d-none";
				echo '
					<div class="row my-3">
						<div class="col-md-12">
							<div class="d-flex align-items-center mb-3">
								<div>
									<img src="'. base_url("assets/images/profile/") .  $user_comment['image']  .'" width="50px" alt="">
								</div>
								<div class="ml-3">
									<span class="d-block">'. $user_comment['fullname'] .'</span>
									<span class="d-block"><a href="'. base_url($user_comment['username']) .'" class="text-dark">'. $user_comment['username'] .'</a></span>
									<small class="d-block">'. date("l, d F Y h:i:j", $user_comment['comment_create_at']) .'</small>	
								</div>
								<div class="' . 'm-4 ' . $conditionAccess . ' delete-wrap' . '">
									<button type="submit" data-id="' . $user_comment['comment_id'] .  '"
									class="text-dark btn-delete" ><i class="fas fa-fw fa-trash"></i></button>
								</div>
							</div>
							<div>
								'. $user_comment['comment'] .'
							</div>
						</div>
					</div>
				';
		endforeach;
	}

	public function friend()
	{
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		$data['all_users'] = $this->User_model->all_user();
		$data['title'] = "Roften - Friends";
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navbar', $data);
		$this->load->view('user/friend', $data);
		$this->load->view('layouts/footer');
	}

	public function profile($username)
	{

		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		// Mengambil data id user sender by username
		$data['friend'] = $this->db->get_where("user", ['username' => $username])->row_array();

		// Get Post
		$data['user_posts'] = $this->User_model->get_user_post($username);

		$data['user_comments'] = $this->User_model->get_user_comments();

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('body', 'body', 'required');

		if($this->form_validation->run() == false) {
			$data['title'] = $data['friend']['fullname'];
			$this->load->view('layouts/header',$data);
			$this->load->view('layouts/navbar',$data);
			$this->load->view('user/profile', $data);
			$this->load->view('layouts/footer', $data);
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

	public function ckeditor(){
		if(isset($_FILES['upload']['name'])){

			$file = $_FILES['upload']['tmp_name'];
		
			$file_name = $_FILES['upload']['name'];
		
			$file_name_array = explode(".", $file_name);
		
			$extension = end($file_name_array);
		
			$new_image_name = rand() . '.' . $extension;
		
			chmod('./assets/images/post', 777);
		
			$allowed_extension = array("jpg", "gif", "png", "jpeg");
		
			if(in_array($extension, $allowed_extension))
			{
		
				move_uploaded_file($file, './assets/images/post/' . $new_image_name);
			
				$function_number = $_GET['CKEditorFuncNum'];
			
				$url = base_url() . '/assets/images/post/' . $new_image_name;
			
				$message = '';
			
				echo "< type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</>";
		
			}
		
		}
	}
	
	public function chat($username){
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
			$this->load->view('user/chat', $data);
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
			redirect("user/chat/" . $username );
		}

	}

	public function delete_comment() {
		$id =  $_POST['comment_id'];
		return $this->db->delete("comment", ['id' => $id]);
	}
	
}
