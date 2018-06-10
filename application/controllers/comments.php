<?php
	class comments extends CI_Controller{
		public function create($ticket_id){
			$slug = $this->input->ticket('slug');
			$data['ticket'] = $this->ticket_model->get_tickets($slug);

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required| valid_email');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('tickets/index', $data);
				$this->load->view('templates/header');
			} else {
				$this->comment_model->create_comment($ticket_id);
				redirect('tickets/' .$slug);
			}
		}
	}