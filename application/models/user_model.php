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

		//Log user in
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 423f7086fa50a46fdd4add78b0f7ae3f2ff6c864
>>>>>>> 8edbbc3dfaa9ae1687d1be8fa5c572cde3f0332a
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

<<<<<<< HEAD

		//Check username exists
=======
<<<<<<< HEAD

		//Check username exists
=======
		// Check username exists

>>>>>>> 423f7086fa50a46fdd4add78b0f7ae3f2ff6c864
>>>>>>> 8edbbc3dfaa9ae1687d1be8fa5c572cde3f0332a
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
	}
=======
<<<<<<< HEAD
	}
=======
} 
>>>>>>> 423f7086fa50a46fdd4add78b0f7ae3f2ff6c864
>>>>>>> 8edbbc3dfaa9ae1687d1be8fa5c572cde3f0332a
