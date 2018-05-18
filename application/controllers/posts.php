<?php
	class posts extends CI_controller{
		public function index(){
			$data['title'] = 'Latest Posts';

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
	}