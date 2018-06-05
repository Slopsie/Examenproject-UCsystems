<?php
	class ticket_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_tickets($slug = FALSE){
			if($slug === FALSE){
				$query = $this->db->get('tickets');
				return $query->result_array();
			}

			$query = $this->db->get_where('tickets', array('slug' => $slug));
			return $query->row_array();
		}
	}