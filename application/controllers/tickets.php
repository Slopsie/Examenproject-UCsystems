<?php
	class tickets extends CI_controller{
		public function index(){
			$data['title'] = 'Tickets';

			$data['tickets'] = $this->ticket_model->get_tickets();

			//Controleert of de gebruiker ingelogd is
			if(!$this->session->userdata('logged_in')){
                redirect('users/login');
        }

			$this->load->view('templates/header');
			$this->load->view('tickets/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){
            $data['ticket'] = $this->ticket_model->get_tickets($slug);
            if(empty($data['ticket'])){
                show_404();
            }
            $data['title'] = $data['ticket']['title'];
            $this->load->view('templates/header');
            $this->load->view('tickets/view', $data);
            $this->load->view('templates/footer');
        }  
}