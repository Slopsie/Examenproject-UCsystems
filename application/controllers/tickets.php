<?php
	class tickets extends CI_controller{
		public function index(){
			$data['subject'] = 'tickets';

			$data['tickets'] = $this->ticket_model->get_tickets();

			//Checks if user is logged in
			if(!$this->session->userdata('logged_in')){
                redirect('users/login');
        }
            //Loads the following pages
            $this->load->view('templates/header');
			$this->load->view('tickets/index', $data);
			$this->load->view('templates/footer');
		}
        //retrieves tickets from database, unless table is empty
		public function view($slug = NULL){

            $data['tickets'] = $this->ticket_model->get_tickets($slug);
            if(empty($data['tickets'])){
                show_404();
            }
            $data['subject'] = $data['tickets']['subject'];

            //Loads the following pages
            $this->load->view('templates/header');
            $this->load->view('tickets/view', $data);
            $this->load->view('templates/footer');
        }  
    }