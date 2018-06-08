<?php
	class posts extends CI_controller{
		public function index(){
			$data['title'] = 'Latest posts';

			$data['posts'] = $this->post_model->get_posts();

<<<<<<< HEAD
				//Check if user is logged in
				if(!$this->session->userdata('logged_in')){
                	redirect('users/login');
        }
        	//Loads the following pages
=======
						//Check login
				if(!$this->session->userdata('logged_in')){
                	redirect('users/login');
        }

>>>>>>> a9d4500db900b807681310d387ea04ae36ca6045
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
}