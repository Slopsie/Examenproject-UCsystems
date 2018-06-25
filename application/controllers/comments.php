<?php
	class comments extends CI_controller{
		public function create($ticket_id){
			$slug = $this->input->post('slug');
			$data['tickets'] = $this->ticket_model->get_tickets($slug);

			//Sets a rule that requires text in the body
			$this->form_validation->set_rules('body', 'Body', 'required');

			//loads the following pages
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('tickets/view', $data);
				$this->load->view('templates/footer');
			} else {
				$this->comment_model->create_comment($ticket_id);
				redirect('tickets/'.$slug);
			}

		}
	}