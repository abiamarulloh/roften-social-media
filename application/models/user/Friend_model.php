<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friend_model extends CI_Model {

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
					->where('receiver_id', $me)
					->where('sender_id', $friend)
					->or_group_start()
							->where('receiver_id', $friend)
							->where('sender_id', $me)
					->group_end()
			->group_end()
		->get();
	}

	public function get_user_post($username)
	{
		$this->db->order_by("post.create_at", 'DESC');
		$this->db->select("title, body, post.create_at as post_create, fullname, username, image, post.id as post_id");
		$this->db->from("post");
		$this->db->join("user", "user.id = post.user_id");
		$this->db->where("username" , $username);
		return $this->db->get()->result_array();
	}

	public function get_users_posts()
	{
		$this->db->order_by("post.create_at", 'DESC');
		$this->db->select("title, body, post.create_at as post_create, fullname, username, image, post.id as post_id");
		$this->db->from("post");
		$this->db->join("user", "user.id = post.user_id");
		return $this->db->get()->result_array();
	}

	public function get_user_comments()
	{
		$this->db->order_by("comment.create_at", 'DESC');
		$this->db->select("username, fullname, comment, image, comment.post_id as post_id, comment.id as comment_id, comment.create_at as comment_create_at");
		$this->db->from("comment");
		$this->db->join("post", "comment.post_id = post.id");
		$this->db->join("user", "comment.user_id = user.id");
		return $this->db->get()->result_array();
	}

	public function get_user_comment_by_post($post_id)
	{
		$this->db->order_by("comment.create_at", 'DESC');
		$this->db->select("username, fullname, comment, image, comment.post_id as post_id, comment.id as comment_id, comment.create_at as comment_create_at");
		$this->db->from("comment");
		$this->db->join("post", "comment.post_id = post.id");
		$this->db->join("user", "comment.user_id = user.id");
		$this->db->where("comment.post_id", $post_id);
		return $this->db->get()->result_array();
	}
	
}
