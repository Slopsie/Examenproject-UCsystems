<?php
	class comments extends CI_controller{
		public function create($post_id){
			$slug = $this->input->post('slug');
			$data['tickets'] = $this->ticket_model->get_tickets($slug);

			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('tickets/view', $data);
				$this->load->view('templates/footer');
			} else {
				$this->comment_model->create_comment($post_id);
				redirect('tickets/'.$slug);
			}

		}
	}