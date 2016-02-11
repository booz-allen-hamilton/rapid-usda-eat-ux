<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Client.php');

class Welcome extends Client {

	public function index()
	{
		$data['app'] = array(
			'title' => $this->lang->line('welcome_title'),
			'view'  => 'pages/welcome'
		);
		
		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}
}
