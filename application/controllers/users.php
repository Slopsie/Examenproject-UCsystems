<?php
	class users extends CI_CONTROLLER{
<<<<<<< HEAD
		//Register user
=======
>>>>>>> 9495bd2f6ccc84d3ed28d3d0b73361066f9205ab
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required');
<<<<<<< HEAD
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
=======
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
>>>>>>> 9495bd2f6ccc84d3ed28d3d0b73361066f9205ab
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('posts');
			}
		}
<<<<<<< HEAD
				//Log in user
				public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {

				//Get username
				$username = $this->input->post('username');
				//Get and encrypt the password
				$password = md5($this->input->post('password'));

				//Log in user
				$user_id = $this->user_model->login($username, $password);

				if($user_id){
					//Create session
					die('SUCCESS');
					//Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('posts');
				} else{
					//Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('users/login');
				}
			}
		}

		// Check if username exists
		function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one.');
			if($this->user_model->check_username_exists($username)){
				return true;
			} else {
				return false;
			}
		}

				// Check if email exists
		function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one.');
			if($this->user_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
=======
>>>>>>> 9495bd2f6ccc84d3ed28d3d0b73361066f9205ab
	}