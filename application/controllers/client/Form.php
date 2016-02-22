<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/controllers/Client_controller.php';

/**
 * Form Application Controller
 */
class Form extends Client_controller {

	public $form_scenario_a = array(
		1 => 'otherAssistance',
		2 => 'householdStudents',
		3 => 'contactInformation',
		4 => 'childrenEthnicityAndRace',
		5 => 'confirmation',
		6 => 'termsAndConditions'
	);

	public $form_scenario_b = array(
		1 => 'householdStudents',
		2 => 'contactInformation',
		3 => 'childrenEthnicityAndRace',
		4 => 'confirmation',
		5 => 'termsAndConditions'
	);

	public $form_scenario_c = array(
		1 => 'householdMembers',
		2 => 'contactInformation',
		3 => 'childrenEthnicityAndRace',
		4 => 'confirmation',
		5 => 'termsAndConditions'
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
		//echo $current_form_step;
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
				$current_form_section = 'yourSituation';
			} else {
				switch($current_form_scenario) {
					case 'assistance':
						$scenario_form_sections = $this->form_scenario_a;
					break;
					case 'foster':
						$scenario_form_sections = $this->form_scenario_b;
					break;
					case 'no':
						$scenario_form_sections = $this->form_scenario_c;
					break;
				}
				
				if (is_numeric($current_form_step)) {
					$current_form_section = $scenario_form_sections[$current_form_step];
				} else {
					$current_form_section = $current_form_step;
				}
			}
		}
		
		//	save that they are on the confirmation page
		if ($current_form_section == 'confirmation') {
			$this->session->userdata('form_confirmation', 1);
		} else {
			$this->session->unset_userdata('form_confirmation');
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
			'step'          => $this->get_form_step(),
			'data'					=> array(
				'other_assistance'    => $this->session->userdata('form_other_assistance'),
				'household_members'   => $this->session->userdata('form_household_members'),
				'household_students'  => $this->session->userdata('form_household_students'),
				'contact_information' => $this->session->userdata('form_contact_information'),
			)
		);

		$this->load->view('layout/application', $data);
	}

	public function cancel() {
		$this->session->sess_destroy();
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
		if (!$this->input->post()) {
			redirect('error');
		} else {
			if ($this->input->post('back') == 1) {
				
				$form_step = $this->get_form_step();
				$next_step = $form_step;
				switch($form_step) {
					case 'start':
					case 'scenario':
					break;
					case 1:
						$next_step = 'scenario';
					break;
					default:
						if (is_numeric($form_step)) {
							$this->scenario = $this->get_form_scenario();
							switch($this->scenario) {
								case 'assistance':
									if ($form_step == count($this->form_scenario_a)) {
										$next_step = count($this->form_scenario_a) - 1;
									} else {
										$next_step = $form_step - 1;
									}
								break;
								case 'foster':
									$form_step_section = $this->form_scenario_b[$form_step];
								break;
								case 'no':
									$form_step_section = $this->form_scenario_c[$form_step];
								break;
							}
						}
					break;
				}
				
				$this->set_form_step($next_step);
				redirect('apply');
				
			} else {
				$this->process_form();
			}
		}
	}

	protected function process_form() {
		$form_step = $this->get_form_step();
		$this->load->library('form_validation');

		$error_alert_message = 'error_server_validation';	//	outputted with $this->lang->line('error');
		switch($form_step) {
			case 'start':
				$this->form_validation->set_rules('first_name', '', 'required|max_length[30]');
				$this->form_validation->set_rules('last_name', '', 'required|max_length[30]');
				$this->form_validation->set_rules('middle_initial', '', 'max_length[1]');
				$this->form_validation->set_rules('age_validation', '', 'required|in_list[1]');
				$next_step = 'scenario';
				$error_alert_message = 'error_age_validation';
			break;
			case 'scenario':
				$this->form_validation->set_rules('scenario', '', 'required|in_list[assistance,foster,no]');
				$next_step = 1;
			break;
			case "electronicSignature":
				$this->form_validation->set_rules('electronic_signature', '', 'required|max_length[60]');
				if ($this->input->post('ssn_not_available') != 1) {
					$this->form_validation->set_rules('social_security_last_four', '', 'required|min_length[4]|max_length[4]');
				}
				$next_step = 'success'; 
			break;
		}

		//	if user is on numeric step
		$form_step_section = NULL;
		if (is_numeric($form_step)) {
			$this->scenario = $this->get_form_scenario();
			switch($this->scenario) {
				case 'assistance':
					$form_step_section = $this->form_scenario_a[$form_step];
					if ($form_step == count($this->form_scenario_a)) {
						$next_step = 'electronicSignature';
					} else {
						$next_step = $form_step + 1;
					}
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
			case "householdStudents":
				$this->form_validation->set_rules('child_first[]', '', 'required|max_length[30]');
				$this->form_validation->set_rules('child_last[]', '', 'required|max_length[30]');
				$this->form_validation->set_rules('child_middle[]', '', 'max_length[5]');
			break;
			case "contactInformation":
				$this->form_validation->set_rules('street_address', '', 'required');
				//$this->form_validation->set_rules('apt', '', '');
				$this->form_validation->set_rules('city', '', 'required');
				$this->form_validation->set_rules('state', '', 'required');
				$this->form_validation->set_rules('zip', '', 'required');
				// $this->form_validation->set_rules('phone', '', 'required');
				// $this->form_validation->set_rules('email', '', 'required');
				// $this->form_validation->set_rules('status_text', '', 'required');
				// $this->form_validation->set_rules('status_email', '', 'required');
				// $this->form_validation->set_rules('status_phone', '', 'required');
			break;
			case 'confirmation':
				$this->form_validation->set_rules('confirmation', '', 'required|in_list[1]');
			break;
			case "termsAndConditions":
				$this->form_validation->set_rules('terms_and_cond_agree', '', 'required|in_list[1]');
			break;
			case "childrenEthnicityAndRace":
				$this->form_validation->set_rules('children_ethnicity_race', '', 'required|in_list[1]');
			break;
		}
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_alert', $error_alert_message);
			echo validation_errors();
			die;
		} else {
			switch($form_step) {
				case 'start':
					$householdMembers = array();
					$householdMembers[] = array(
						'first_name'  => $this->input->post('first_name'),
						'last_name'   => $this->input->post('last_name'),
						'middle_initial' => $this->input->post('middle_initial'),
					);
					$this->session->set_userdata('form_household_members', $householdMembers);
				break;
				case 'scenario':
					$this->session->set_userdata('form_scenario', $this->input->post('scenario'));
				break;
			}

			switch($form_step_section) {
				case "otherAssistance":
					$other_assistance = array(
						'assistance_program' => $this->input->post('assistance_program'),
						'case_number'        => $this->input->post('case_number'),
					);
					$this->session->set_userdata('form_other_assistance', $other_assistance);
				break;
				case "householdStudents":
					$count = count($this->input->post('child_first'));
					$students = array();
					$child_first_name  = $this->input->post('child_first');
					$child_last_name   = $this->input->post('child_last');
					$child_middle_initial = $this->input->post('child_middle');

					for($i = 0; $i < $count; $i++) {
						$students[] = array(
							'first_name'  => $child_first_name[$i],
							'last_name'   => $child_last_name[$i],
							'middle_initial' => $child_middle_initial[$i],
						);
					}
					$this->session->set_userdata('form_household_students', $students);
				break;
				case "contactInformation":
					$contact_information = array(
						'street_address' => $this->input->post('street_address'),
						'apt'            => $this->input->post('apt'),
						'city'           => $this->input->post('city'),
						'state'          => $this->input->post('state'),
						'zip'            => $this->input->post('zip'),
						'phone'          => $this->input->post('apt'),
						'email'          => $this->input->post('email'),
						'status_text'    => $this->input->post('status_text'),
						'status_email'   => $this->input->post('status_email'),
						'status_phone'   => $this->input->post('status_phone'),
					);
					$this->session->set_userdata('form_contact_information', $contact_information);
				break;
				case "childrenEthnicityAndRace":
					$form_household_students  = $this->session->userdata('form_household_students');
					$loop = 0;
					$ethnicity = $this->input->post('ethnicity');
					$race = $this->input->post('race');
					$student_array = array();
					foreach($form_household_students as $student) {
						$student_array[$loop] = array(
							'first_name'  => $student['first_name'],
							'last_name'   => $student['last_name'],
							'middle_initial' => $student['middle_initial'],
							'ethnicity' => (!empty($ethnicity[$loop]) ? $ethnicity[$loop] : NULL),
							'race' => (!empty($race[$loop]) ? $race[$loop] : NULL),
						);
						$loop++;
					}
					$this->session->set_userdata('form_household_students', $student_array);
				break;
			}
			$this->set_form_step($next_step);
		}
		redirect('apply');
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