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

	public function debug()
	{
		
		$data['app'] = array(
			'title' => $this->lang->line('nav_help'),
			'view'  => 'pages/debug',
			'scripts' => array(
				'lib/validator/dist/validator.min.js',
				'js/form/form.js',
				'js/form/'.$this->uri->segment(2).'.js'
			)
		);
		
		$data['form'] = array(
			'process'       => 'apply/process',
			'section'       => $this->uri->segment(2),
			'data'					=> array(
				'other_assistance'    => $this->session->userdata('form_other_assistance'),
				'household_members'   => $this->session->userdata('form_household_members'),
				'household_students'  => $this->session->userdata('form_household_students'),
				'contact_information' => $this->session->userdata('form_contact_information'),
			)
		);
		
		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}
}
