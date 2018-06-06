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
			$data['title'] = $data['ticket']['title'];

            $data['ticket'] = $this->ticket_model->get_tickets($slug);
            if(empty($data['ticket'])){
                show_404();
            }

            $this->load->view('templates/header');
            $this->load->view('tickets/view', $data);
            $this->load->view('templates/footer');
        }  
 
    	public function statistics(){  
    			//forget it for now
         	$data = $this->ticket_model->get_creation_date(); 
  
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 

        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->received_at", 
                    "f" => null 
                )            
            );
            } 
 
        echo json_encode($responce);

        	$this->load->view('templates/header');
			$this->load->view('tickets/ticket_view');
			$this->load->view('templates/footer'); 
        } 
    }