<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

	public function update_medsos($data, $id)
	{
		$this->db->where("id" , $id);
		$this->db->update("user", $data);
	}

	public function update_security($data, $id)
	{
		$this->db->where("id" , $id);
		$this->db->update("user", $data);
	}

	public function all_user()
	{
		$this->db->order_by("rand()", 'DESC');
		return $this->db->get("user")->result_array();
	}

	public function userChat($me, $friend){
		$this->db->order_by("chat.date_created", 'ASC');
		return $this->db->select('*')->from('chat')
			->group_start()
					->where('receiver_id', $me['id'])
					->where('sender_id', $friend['id'])
					->or_group_start()
							->where('receiver_id', $friend['id'])
							->where('sender_id', $me['id'])
					->group_end()
			->group_end()
		->get();
	}

	public function get_user_post($username)
	{
		$this->db->order_by("post.create_at", 'DESC');
		$this->db->select("title, body, post.create_at as post_create, fullname, username, image");
		$this->db->from("post");
		$this->db->join("user", "user.id = post.user_id");
		$this->db->where("username" , $username);
		return $this->db->get()->result_array();
	}

	public function get_users_posts()
	{
		$this->db->order_by("post.create_at", 'DESC');
		$this->db->select("title, body, post.create_at as post_create, fullname, username, image");
		$this->db->from("post");
		$this->db->join("user", "user.id = post.user_id");
		return $this->db->get()->result_array();
	}
	
}
