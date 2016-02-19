<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/controllers/Client_controller.php';

/**
 * Form Application Controller
 */
class Form extends Client_controller {

	public $form_sections = array(
		1 => 'household',
		2 => 'householdMembers',
		3 => 'childrenDetails',
		4 => 'householdMembersIncome',
		5 => 'contactInformation',
		6 => 'socialSecurityNumber'
	);

	/**
	 * Index route
	 * @return [type] [description]
	 */
	public function index()
	{
		$this->load->helper('form');

		//	get current form step
		$current_form_step = $this->get_form_step();
		if ($current_form_step != FALSE) {
			$form_view = 'pages/application-form';
			$form_section = $this->form_sections[$current_form_step];
			$form_scripts = array(
				'lib/bootstrap-validator/dist/validator.min.js',
				'js/form/form.js',
				'js/form/'.$this->form_sections[$current_form_step].'.js'
			);
		} else {
			//	show start page
			$form_view    = 'pages/application-start';
			$form_section = NULL;
			$form_scripts = NULL;
		}

		$data['global'] = $this->global;
		$data['app'] = array(
			'title'   => $this->lang->line('welcome_title'),
			'view'    => $form_view,
			'scripts' => $form_scripts
		);

		$data['form'] = array(
			'form_sections' => $this->form_sections,
			'process'       => 'apply/process',
			'section'       => $form_section,
			'step'          => $this->get_form_step()
		);

		$this->load->view('layout/application', $data);
	}

	public function cancel() {
		$this->session->unset_userdata('form_step');
		redirect();
	}


	public function standard_form()
	{
		$data['global'] = $this->global;

		$data['app'] = array(
			'title' => $this->lang->line('welcome_title'),
			'view'  => 'pages/application-form'
		);

		$data['form'] = array(
			'process' => '',
			'step'    => $this->get_form_step()
		);

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
		$form_step = $this->get_form_step();

		switch($form_step) {
			default:
			case 'start':
				$this->set_form_step(1);
				redirect('apply');
			break;
			case 1:
				$this->set_form_step(2);
				redirect('apply');
			break;
			case 2:
				$this->set_form_step(3);
				redirect('apply');
			break;
			case 3:
				$this->set_form_step(4);
				redirect('apply');
			break;
			case 4:
				$this->set_form_step(5);
				redirect('apply');
			break;
			case 5:
				$this->set_form_step(6);
				redirect('apply');
			break;
			case 6:
			break;
		}



		// $this->load->library('form_validation');
		//
		// //	validate form items
		// $this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		// $this->form_validation->set_rules('last_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		// $this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		// $this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		// $this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		// $this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		// $this->form_validation->set_rules('first_name', $this->lang->line('asdfsad'), 'required|max_length[50]');
		//
		// if ($this->form_validation->run() == FALSE) {
		// 	$this->session->set_flashdata('error_alert', 'error');
		// 	redirect('apply');
		// }
	}

	protected function get_form_step() {
		if (!$this->session->userdata('form_step')) {
			return FALSE;
		} else {
			return $this->session->userdata('form_step');
		}
	}

	protected function set_form_step($step) {
		$this->session->set_userdata('form_step', $step);
	}

}