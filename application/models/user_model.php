<?php
	class user_model extends CI_MODEL{
		public function register($enc_password){
			// User data array
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $enc_password,
				'zipcode' => $this->input->post('zipcode'),
			);

			//Insert user
			return $this->db->insert('users', $data);

		}
<<<<<<< HEAD

		//Log user in
		public function login($username, $password){
			//Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}


		//Check username exists
=======
<<<<<<< HEAD

		// Check username exists
>>>>>>> d4dd48c5640d0d1515f3406dc2a3781ab9794742
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else{
				return false;
			}
		}
				// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else{
				return false;
			}
		}
<<<<<<< HEAD
=======
=======
>>>>>>> 9495bd2f6ccc84d3ed28d3d0b73361066f9205ab
>>>>>>> d4dd48c5640d0d1515f3406dc2a3781ab9794742
	}