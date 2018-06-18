<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Auth_model extends CI_Model
{

 	public function registerModel($post){

 		$data = array(
 			"email" => $post['email'],
 			"username" => $post['username'],
 			"password" => Utils::hash('sha1',$post['password'], 'auth salt'),
 		);

 		$this->db->insert("useracct",$data);

 		if ($this->db->affected_rows() > 0) {
 			$notif['message'] = "Save Successfully";
 			$notif['type'] = "success";
 			unset($_POST);
 		}else{
 			$notif['message'] = "Registration Failed!";
 			$notif['type'] = "danger";
 		}


 		return $notif;

 	}

 	public function login(){

 		$notif = array();
 		$data = array(
 			"email" => $this->input->post('email'),
 			"password" => Utils::hash('sha1', $this->input->post('password'), 'auth salt'),
 		);

 			$this->db->select('*');
 			$this->db->from('useracct');
 			$this->db->where('email',$data['email']);
 			$this->db->where('password',$data['password']);
 			$this->db->limit(1);

 			$query = $this->db->get();

 			if ($query->num_rows() > 0) {
 				$row = $query->row();

 				if ($row->isactive != 1) {
 					$notif['message'] = "Invalid approach, please use the link that has been send to your email.";
 					$notif['type'] = "warning";
 				}else{

	 				$notif['message'] = "Successfully login";
	 				$notif['type'] = "success";

	 				$session = array(
	 					'userid' => $row->id,
	 					'firstname' => $row->firstname,
	 					'lastname' => $row->lastname,
	 				);

	 				$this->session->set_userdata('userlogin',$session);
 					
 				}
 			}else{

 				$notif['message'] = "Login failed Please try again";
 				$notif['type'] = "danger";

 			}


 			return $notif;


 	}	
}



?>