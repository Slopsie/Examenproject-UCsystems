<?php
	class pages extends CI_controller{

		//shows homepage unless file doesn't exist
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();

			}
				//Check if user is logged in
				if(!$this->session->userdata('logged_in')){
                	redirect('users/login');
        }

        	//Loads the following pages
			$data['title'] = ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('pages/' .$page, $data);
			$this->load->view('templates/footer');
		}
	}