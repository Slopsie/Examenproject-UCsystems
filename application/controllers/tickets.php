<?php
	class tickets extends CI_controller{
		public function index(){
			$data['title'] = 'Tickets';

			$data['tickets'] = $this->ticket_model->get_tickets();

<<<<<<< HEAD
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
=======
			//Controleert of de gebruiker ingelogd is
			if(!$this->session->userdata('logged_in')){
                redirect('users/login');
        }

			$this->load->view('templates/header');
			$this->load->view('tickets/index', $data);
			$this->load->view('templates/footer');
		}

>>>>>>> a9d4500db900b807681310d387ea04ae36ca6045
		public function view($slug = NULL){
			$data['title'] = $data['ticket']['title'];

            $data['ticket'] = $this->ticket_model->get_tickets($slug);
            if(empty($data['ticket'])){
                show_404();
            }
<<<<<<< HEAD
            //Loads the following pages
=======

>>>>>>> a9d4500db900b807681310d387ea04ae36ca6045
            $this->load->view('templates/header');
            $this->load->view('tickets/view', $data);
            $this->load->view('templates/footer');
        }  
<<<<<<< HEAD
=======
 
    	public function statistics(){  
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
>>>>>>> a9d4500db900b807681310d387ea04ae36ca6045
    }