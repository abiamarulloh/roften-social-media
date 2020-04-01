<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{


	public function UpdateUserMedsos($data)
	{
		$this->db->where("id" , $data['id']);
		$this->db->update("user", $data);
	}

	public function UpdateUserSecurity($data)
	{
		$this->db->where("id" , $data['id']);
		$this->db->update("user", $data);
	}

	public function getAllUser()
	{
		$this->db->order_by("user.date_created", 'DESC');
		return $this->db->get("user")->result_array();
	}

	public function userChat($me, $friend){
		$this->db->order_by("chat.date_created", 'ASC');
		return $this->db->select('*')->from('chat')
        ->group_start()
			->where('sender_id', $me['id'])
			->where('receiver_id', $friend['id'])
		->group_end()
		->or_group_start()
			->where('receiver_id', $me['id'])
			->where('sender_id', $friend['id'])
		->group_end()
		->get();
	}
	
}
