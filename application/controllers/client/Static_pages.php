<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/controllers/Client_controller.php';

class Static_pages extends Client_controller {
	
	public function how_it_works()
	{
		$data['app'] = array(
			'title' => $this->lang->line('nav_how_it_works'),
			'view'  => 'pages/how-it-works'
		);
		
		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}

	public function help()
	{
		$data['app'] = array(
			'title' => $this->lang->line('nav_help'),
			'view'  => 'pages/help'
		);
		
		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}
}
