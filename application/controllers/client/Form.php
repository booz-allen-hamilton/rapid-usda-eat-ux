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
			'view'  => 'pages/application-start'
		);

		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}


	public function standard_form()
	{
		$data['app'] = array(
			'title' => $this->lang->line('welcome_title'),
			'view'  => 'pages/application-form'
		);

		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}




	//
	// public function form_assistance()
	// {
	// 	$data['app'] = array(
	// 		'title' => $this->lang->line('welcome_title'),
	// 		'view'  => 'pages/application-form'
	// 	);
	//
	// 	$data['global'] = $this->global;
	//
	// 	$this->load->view('layout/application', $data);
	// }


	public function status()
	{
		$data['app'] = array(
			'title' => $this->lang->line('welcome_title'),
			'view'  => 'pages/application-status'
		);
		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}

	/**
	 * Process Form
	 * @return [type] [description]
	 */
	public function process() {
		$this->load->library('form_validation');

		//	validate form items
		$this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		$this->form_validation->set_rules('last_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		$this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		$this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		$this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		$this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		$this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_alert', 'error');
			redirect('apply');
		}
	}
}