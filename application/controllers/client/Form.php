<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/controllers/Client_controller.php';

/**
 * Form Application Controller
 */
class Form extends Client_controller {

	public $form_scenario_a = array(
		1 => 'otherAssistance',
		2 => 'householdChildren',
		3 => 'contactInformation',
		4 => 'confirmation',
		5 => 'termsAndConditions'
	);

	public $form_scenario_b = array(
		1 => 'householdChildren',
		2 => 'contactInformation',
		3 => 'confirmation',
		4 => 'termsAndConditions'
	);

	public $form_scenario_c = array(
		1 => 'householdMembers',
		2 => 'householdIncome',
		3 => 'contactInformation',
		4 => 'confirmation',
		5 => 'childrenEthnicityAndRace',
		6 => 'termsAndConditions'
	);

	public $scenario;

	/**
	 * Index route
	 * @return [type] [description]
	 */
	public function index()
	{
		$this->load->helper('form');

		//	get saved form data
		$current_form_step     = $this->get_form_step();
		$current_form_scenario = $this->get_form_scenario();

		//	if step doesn't exist start user from beginning
		if ($current_form_step == 'start') {
			$form_sections          = NULL;
			$scenario_form_sections = NULL;
			$current_form_section   = 'gettingStarted';
		}
		//	if session exists
		else {
			if ($current_form_step == 'scenario') {
				$scenario_form_sections = NULL;
				$current_form_section   = 'whichSituation';
			} else {
				switch($current_form_scenario) {
					case 'assistance':
						$scenario_form_sections = $this->form_scenario_a;
						$current_form_section   = $scenario_form_sections[$current_form_step];
					break;
					case 'foster':
						$scenario_form_sections = $this->form_scenario_b;
						$current_form_section = $scenario_form_sections[$current_form_step];
					break;
					case 'no':
						$scenario_form_sections = $this->form_scenario_c;
						$current_form_section = $scenario_form_sections[$current_form_step];
					break;
					// default:
					// 	$scenario_form_sections = NULL;
					// 	$current_form_section   = 'whichSituation';
					// break;
				}
			}
		}

		$data['global'] = $this->global;
		$data['app'] = array(
			'title'   => $this->lang->line('welcome_page_title'),
			'view'    => 'pages/application-form',
			'scripts' => array(
				'lib/validator/dist/validator.min.js',
				'js/form/form.js',
				'js/form/'.$current_form_section.'.js'
			)
		);

		$data['form'] = array(
			'form_sections' => $scenario_form_sections,
			'process'       => 'apply/process',
			'section'       => $current_form_section,
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
	 * validate form and process
	 * @return [type] [description]
	 */
	public function process() {
		$form_step = $this->get_form_step();
		$this->load->library('form_validation');

		$error_alert_message = 'error';	//	outputted with $this->lang->line('error');
		switch($form_step) {
			case 'start':
				$this->form_validation->set_rules('getting_started_first_name', '', 'required|max_length[30]');
				$this->form_validation->set_rules('getting_started_last_name', '', 'required|max_length[30]');
				$this->form_validation->set_rules('age_validation', '', 'required|in_list[1]');
				$next_step = 'scenario';
				$error_alert_message = 'error_age_validation';
			break;
			case 'scenario':
				$this->form_validation->set_rules('scenario', '', 'required|in_list[assistance,foster,no]');
				$next_step = 1;
			break;
		}

		//	if user is on numeric step
		if (is_numeric($form_step)) {
			$this->scenario = $this->get_form_scenario();
			switch($this->scenario) {
				case 'assistance':
					$form_step_section = $this->form_scenario_a[$form_step];
					$next_step = 2;
				break;
				case 'foster':
					$form_step_section = $this->form_scenario_b[$form_step];
				break;
				case 'no':
					$form_step_section = $this->form_scenario_c[$form_step];
				break;
			}
		}

		//	validate step
		switch($form_step_section) {
			case "otherAssistance":
				$this->form_validation->set_rules('assistance_program', '', 'required|in_list[snap,tanf,fdpir]');
				$this->form_validation->set_rules('case_number', '', 'required|max_length[30]');
			break;
		}

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_alert', $error_alert_message);

			// echo validation_errors();
			// die;
		} else {
			switch($form_step) {
				default:
				case 'start':
					$getting_started = array(
						'getting_started_first_name'     => $this->input->post('getting_started_first_name'),
						'getting_started_last_name'      => $this->input->post('getting_started_last_name'),
						'getting_started_middle_initial' => $this->input->post('getting_started_middle_initial'),
					);
					$this->session->set_userdata('form_getting_started', $getting_started);
				break;
				case 'scenario':
					$this->session->set_userdata('form_scenario', $this->input->post('scenario'));
				break;
			}
			$this->set_form_step($next_step);
		}

		redirect('apply');


		// switch($form_step) {
		// 	default:
		// 	case 'start':
		// 		$this->form_validation->set_rules('firstName', '', 'required|max_length[30]');
		// 		$this->form_validation->set_rules('lastName', '', 'required|max_length[30]');
		// 		$this->form_validation->set_rules('over18yearsold', '', 'required|in_list[1]');
		//
		//
		// 		$this->set_form_step(1);
		// 		redirect('apply');
		// 	break;
		// 	case 1:
		// 		$this->form_validation->set_rules('numberChildren', '', 'required|numeric');
		// 		$this->form_validation->set_rules('numberAdults', '', 'required|numeric');
		// 		if ($this->form_validation->run() == FALSE) {
		// 			$this->session->set_flashdata('error_alert', 'error');
		// 		} else {
		// 			$form_data = array(
		// 				'numberChildren' => $this->input->post('numberChildren'),
		// 				'numberAdults' => $this->input->post('numberAdults'),
		// 			);
		// 			$this->session->set_userdata('form_section_1', $form_data);
		// 			$this->set_form_step(2);
		// 		}
		// 		redirect('apply');
		// 	break;
		// 	case 2:
		// 		$this->set_form_step(3);
		// 		redirect('apply');
		// 	break;
		// 	case 3:
		// 		$this->set_form_step(4);
		// 		redirect('apply');
		// 	break;
		// 	case 4:
		// 		$this->set_form_step(5);
		// 		redirect('apply');
		// 	break;
		// 	case 5:
		// 		$this->set_form_step(6);
		// 		redirect('apply');
		// 	break;
		// 	case 6:
		// 	break;
		// }
	}

	/**
	 * Get Form Step
	 * @return [type] [description]
	 */
	protected function get_form_step() {
		if (!$this->session->userdata('form_step')) {
			$this->set_form_step('start');
		}
		return $this->session->userdata('form_step');
	}

	/**
	 * Get Form Scenario
	 * @return [type] [description]
	 */
	protected function get_form_scenario() {
		if (!$this->session->userdata('form_scenario')) {
			return FALSE;
		} else {
			return $this->session->userdata('form_scenario');
		}
	}

	/**
	 * Set Form Step
	 * @param [type] $step [description]
	 */
	protected function set_form_step($step) {
		$this->session->set_userdata('form_step', $step);
	}

}