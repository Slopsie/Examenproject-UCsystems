<?php
	class pages extends CI_controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();

			}
									//Check login
				if(!$this->session->userdata('logged_in')){
                	redirect('users/login');
        }


			$data['title'] = ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('pages/' .$page, $data);
			$this->load->view('templates/footer');
		}
	}