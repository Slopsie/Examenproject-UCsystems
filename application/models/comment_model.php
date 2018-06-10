<?php
	class comment_model extends CI_model{
		public function __construct(){
			$this->load->database();
		}

		public function create_comment($ticket_id){
			$data = array(
				'ticket_id' => $ticket_id,
				'name' => $this->input->ticket('name'),
				'email' => $this->input->ticket('email'),
				'body' => $this->input->ticket('body'),
		);

			return $this->db->insert('comments', $data);
		}
	}