<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/Chat_model");
		is_logged_in();
	}

	public function index() {
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		$data['userLists'] = $this->Chat_model->userChatList($data['user']['id']);

		$data['title'] = "Roften - Chat";
		$this->load->view('layouts/user/header',$data);
		$this->load->view('layouts/user/navbar',$data);
		$this->load->view('pages/user/chat/index', $data);
		$this->load->view('layouts/user/footer');
	}
	
	public function chat($username)
	{
		// Mengambil data receiver dari url
		$data['username'] 	= $username;
		
		// Mengambil data user by email
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

		// Mengambil data id user sender by username
		$data['friend'] = $this->db->get_where("user", ['username' => $username])->row_array();
	
		// Membuat variabel sender dan receiver untuk mendapatkan Id nya
		if($data['user'] && $data['friend']) {
			$data['chatAll'] = $this->Chat_model->userChat($data['user']['id'], $data['friend']['id'])->result_array();
		}

		$data['title'] = "Chat - ". $username;
		$this->load->view('layouts/user/header',$data);
		$this->load->view('layouts/user/navbar',$data);
		$this->load->view('pages/user/chat/view', $data);
		$this->load->view('layouts/user/footer');
	}

	public function getChatWithAjax() 
	{
		$user_id = $_POST['sender_id'];
		$friend_id = $_POST['receiver_id'];
		$username 	= $_POST['username'];

		// Mengambil data user by email
		$user = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

		// Mengambil data id user sender by username
		$friend = $this->db->get_where("user", ['username' => $username])->row_array();
	
		// Membuat variabel sender dan receiver untuk mendapatkan Id nya
		$chatAll = $this->Chat_model->userChat($user_id, $friend_id)->result_array();
		foreach($chatAll as $c) : 
			if($c['message']) :
				if($c['sender_id'] && $c['receiver_id'] ) :
					if($c['sender_id'] == $user['id'] ) :
						echo '
							<li class="right-chat ml-auto list-group-item border-0">
								<div class="text-break mr-2">
									<span>
										'. $c['message'] .'
									</span>
									<span class="float-left mt-5 d-flex align-items-center">
										<i class="fas fa-check ml-2 text-primary float-left"></i>
										<span class="date-chat-left m-2">'. date("h.i", $c['date_created']) .'</span>
									</span>
								</div>
								<div>
									<img 
										src="'. base_url("assets/images/profile/") . $user['image'] .'" 
										alt="'. $user['image'] .'"
									>
								</div>	
						';
					else :
						echo '
							<li class="left-chat mr-auto list-group-item border-0">
								<div>
									<a href="'. base_url($friend['username']) .'">
										<img 
											src="'. base_url("assets/images/profile/") . $friend['image'] .'" 
											alt="'. $friend['image'] .'"
										>
									</a>
								</div>
								<div class="text-break ml-2">
									<span>
										'. $c['message'] .'
									</span>
									<span class="float-right mt-5 d-flex align-items-center">
										<span class="date-chat-left m-2">'. date("h.i", $c['date_created']) .'</span>
										<i class="fas fa-check mr-2 text-primary float-right"></i>
									</span>
								</div>
						';
							
					endif;
					echo '</li>';
				endif;
			endif;
		endforeach;
	}

	public function sendChatWithAjax() 
	{
		// Membuat Rules
		$this->form_validation->set_rules('messageUser', 'messageUser', 'required',[
			'required' => "Pesan harus di isi"
		]);

		if($this->form_validation->run() == false) {
			echo validation_errors();
		}else {
			// Jika Berhasil
			$data = [
				"sender_id"		=> htmlspecialchars($this->input->post("sender_id", true)),
				"receiver_id"	=> htmlspecialchars($this->input->post("receiver_id", true)),
				"message"		=> htmlspecialchars($this->input->post("messageUser", true)),
				'date_created' 	=> time()
			];
			
			// redirect("pages/user/chat/" . $username );
			$result = $this->db->insert("chat", $data);
			if($result) {
				$alert = "Chat successfull add";
				echo $alert;
			}
		}
	}

	public function getChatListUser() {
		$data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
		$data['userFriends'] = $this->Chat_model->userChatList($data['user']['id']);
		
		foreach($data['userFriends'] as $userFriend) {
			$this->db->select("fullname, username, id as userId, image");
			$data['userLists'] = $this->db->select("fullname")->get_where("user", ['id' => $userFriend['friend_id']])->result_array();
			foreach($data['userLists'] as $userList) {
				if($userList) {
					$lastChat = $this->Chat_model->getLastChat($data['user']['id'], $userList['userId']);
					$userLastChat = $this->db->select("fullname")->get_where("user", ['id' => $lastChat['sender_id']])->row_array();
				}
				echo '
					<a href="'. base_url("chat/") . $userList['username'] .'" class="text-dark text-decoration-none my-3">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body d-flex align-items-center">
										<div>
											<img src="'. base_url("assets/images/profile/") . $userList['image'] .'" alt="'.  $userList['image'] .'" width="50px" class="rounded-circle">
										</div>
										<div class="ml-3">
											<span>'.  $userList['fullname'] .'</span>
											<smal class="d-block">'. $userLastChat['fullname'] . ': ' . $lastChat['message'] .' <i class="fas fa-check"></i> 
											</smal>
											<small class="d-block">'. date("l, d F Y h:i:j", $lastChat['date_created']) .'</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				';
			}
		}
	}

	
}
