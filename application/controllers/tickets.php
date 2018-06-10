<?php
	class tickets extends CI_controller{
		public function index(){
			$data['title'] = 'Tickets';

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
			$data['title'] = $data['ticket']['title'];

            $data['ticket'] = $this->ticket_model->get_tickets($slug);
            if(empty($data['ticket'])){
                show_404();
            }
            //Loads the following pages
            $this->load->view('templates/header');
            $this->load->view('tickets/view', $data);
            $this->load->view('templates/footer');
        }  
    }