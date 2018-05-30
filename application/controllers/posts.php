<?php
	class posts extends CI_controller{
		public function index(){
			$data['title'] = 'Latest Posts';

			$data['posts'] = $this->post_model->get_posts();

						//Check login
				if(!$this->session->userdata('logged_in')){
                	redirect('users/login');
        }

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
		public function create(){
<<<<<<< HEAD

	}
}
=======
			//Check login
			if(!$this->session->userdata('logged-in')){
				redirect('users/login');
			}
		}
	}
>>>>>>> 423f7086fa50a46fdd4add78b0f7ae3f2ff6c864
