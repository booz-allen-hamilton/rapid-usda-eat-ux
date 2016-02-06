<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['app'] = array(
			'title' => 'USDA',
			'view'  => 'pages/welcome'
		);


		$this->load->view('layout/application', $data);
	}
}
