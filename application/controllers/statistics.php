<?php 
<<<<<<< HEAD
	class statistics extends CI_controller{
		public function index(){
            
            //Loads the following pages
			$this->load->view('templates/header');
			$this->load->view('statistics/index');
			$this->load->view('templates/footer');
		}
=======
    class statistics extends CI_controller{
        public function index(){

            $this->load->view('templates/header');
            $this->load->view('statistics/index');
            $this->load->view('templates/footer');
        }
>>>>>>> a9d4500db900b807681310d387ea04ae36ca6045

    public function getdata() 
        { 
        $data = $this->ticket_model->get_ticket_data(); 
<<<<<<< HEAD
        
        //Sends data to json 
=======
 
        //data to json 
>>>>>>> a9d4500db900b807681310d387ea04ae36ca6045
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
<<<<<<< HEAD
        //takes data from tickets table and shows it in pie chart
=======

>>>>>>> a9d4500db900b807681310d387ea04ae36ca6045
        foreach($data as $cd) 
            { 
            $response->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->received_at",
                    "f" => null 
                 )  , 
                 array( 
<<<<<<< HEAD
                     "v" => (int)$cd->received_at, 
=======
                     "v" => (int)$cd->resolved, 
>>>>>>> a9d4500db900b807681310d387ea04ae36ca6045
                    "f" => null 
                 ) 
            ); 
            } 
 
        echo json_encode($response);
        } 
    }