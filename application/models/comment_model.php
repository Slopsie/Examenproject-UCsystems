<?php
	class comment_model extends CI_model{
		public function __construct(){
			$this->load->database();
		}
		//sets different values
		public function create_comment($ticket_id){
			$data = array(
				'ticket_id' => $ticket_id,
				'name' => $this->session->username,
				'body' => $this->input->post('body'),
		);

			return $this->db->insert('comments', $data);
		}
		//retrieves comments from db
		public function get_comments($ticket_id){
			$query = $this->db->get_where('comments', array('ticket_id' => $ticket_id));
			return $query->result_array();
		}
	}