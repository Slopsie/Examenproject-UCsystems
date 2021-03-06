<?php 
	class statistics extends CI_controller{
		public function index(){
            
            //Loads the following pages
			$this->load->view('templates/header');
			$this->load->view('statistics/index');
			$this->load->view('templates/footer');
		}

    public function getdata() 
        { 
        $data = $this->ticket_model->get_ticket_data(); 
        
        //Sends data to json 
        $response->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $response->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        //takes data from tickets table and shows it in pie chart
        foreach($data as $cd) 
            { 
            $response->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->received_at",
                    "f" => null 
                 )  , 
                 array( 
                     "v" => (int)$cd->received_at, 
                    "f" => null 
                 ) 
            ); 
            } 
 
        echo json_encode($response);
        } 
    }