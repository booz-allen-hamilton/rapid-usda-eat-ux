<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/controllers/Client_controller.php';

/**
 * Form Application Controller
 */
class Form extends Client_controller {

	public function index()
	{
		$data['app'] = array(
			'title' => $this->lang->line('welcome_title'),
			'view'  => 'pages/application-form'
		);
		
		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}

	public function status()
	{
		$data['app'] = array(
			'title' => $this->lang->line('welcome_title'),
			'view'  => 'pages/application-status'
		);
		
		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}
}
