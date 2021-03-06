<?php
	class posts extends CI_controller{
		public function index(){
			$data['title'] = 'Latest posts';

			$data['posts'] = $this->post_model->get_posts();

				//Check if user is logged in
				if(!$this->session->userdata('logged_in')){
                	redirect('users/login');
        }
        	//Loads the following pages
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){
			$data['post'] = $this->post_model->get_posts($slug);

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = $data['post']['title'];

			        	//Loads the following pages
			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}
}