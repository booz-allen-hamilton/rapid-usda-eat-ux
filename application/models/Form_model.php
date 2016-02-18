
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/model/Client_model.php';

/**
 * Form Application Controller
 */
class Form_model extends Client_model {

	public function draft() {

		$application_form_data = array(
			'income_children_total'              => $this->input->post('income_children_total'),
			'income_children_total_frequency'    => $this->input->post('income_children_total_frequency'),
			'assistance_programs'                => $this->input->post('assistance_programs'),
			'address'                            => $this->input->post('address'),
			'address2'                           => $this->input->post('address2'),
			'city'                               => $this->input->post('city'),
			'state'                              => $this->input->post('state'),
			'zip'                                => $this->input->post('zip'),
			'phone'                              => $this->input->post('phone'),
			'email_address'                      => $this->input->post('email_address'),
			'ssn'                                => $this->input->post('ssn'),
			'no_ssn'                             => $this->input->post('no_ssn'),

			'application_id'                     => $application_id,
			'first_name'                         => $this->input->post('parent_first_name'),
			'last_name'                          => $this->input->post('parent_last_name'),
			'income_work'                        => $this->input->post('income_work'),
			'income_work_frequency'              => $this->input->post('income_work_frequency'),
			'income_public_assistance'           => $this->input->post('income_public_assistance'),
			'income_public_assistance_frequency' => $this->input->post('income_public_assistance_frequency'),
			'income_other'                       => $this->input->post('income_other'),
			'income_other_frequency'             => $this->input->post('income_other_frequency'),

			'first_name'                         => $this->input->post('child_first_name'),
			'last_name'                          => $this->input->post('child_last_name'),
			'middle_initial'                     => $this->input->post('child_middle_initial'),
			'is_student'                         => $this->input->post('is_student'),
			'is_foster'                          => $this->input->post('is_foster'),
			'is_homeless_migrant_runaway'        => $this->input->post('is_homeless_migrant_runaway')
		);
		$this->session->set_userdata('application_form_data', $application_form_data);
	}

	public function save() {
		//	application data table
		$application_data = array(
			'school_id'                       => 1232312,
			'income_children_total'           => $this->input->post('income_children_total'),
			'income_children_total_frequency' => $this->input->post('income_children_total_frequency'),
			'assistance_programs'             => $this->input->post('assistance_programs'),
			'address'                         => $this->input->post('address'),
			'address2'                        => $this->input->post('address2'),
			'city'                            => $this->input->post('city'),
			'state'                           => $this->input->post('state'),
			'zip'                             => $this->input->post('zip'),
			'phone'                           => $this->input->post('phone'),
			'email_address'                   => $this->input->post('email_address'),
			'ssn'                             => $this->input->post('ssn'),
			'no_ssn'                          => $this->input->post('no_ssn'),
			'created_at'                      => time(),
			'updated_at'                      => time(),
		);
		$this->db->insert('applications', $application_data);
		$application_id = $this->db->insert_id();

		//	household member data table
		$household_members = array(
			'application_id'                     => $application_id,
			'first_name'                         => $this->input->post('first_name'),
			'last_name'                          => $this->input->post('last_name'),
			'income_work'                        => $this->input->post('income_work'),
			'income_work_frequency'              => $this->input->post('income_work_frequency'),
			'income_public_assistance'           => $this->input->post('income_public_assistance'),
			'income_public_assistance_frequency' => $this->input->post('income_public_assistance_frequency'),
			'income_other'                       => $this->input->post('income_other'),
			'income_other_frequency'             => $this->input->post('income_other_frequency'),
		);
		$this->db->insert('household_members', $household_members);

		//	household children data table
		$household_children = array(
			'application_id'              => $application_id,
			'first_name'                  => $this->input->post('first_name'),
			'last_name'                   => $this->input->post('last_name'),
			'middle_initial'              => $this->input->post('middle_initial'),
			'is_student'                  => $this->input->post('is_student'),
			'is_foster'                   => $this->input->post('is_foster'),
			'is_homeless_migrant_runaway' => $this->input->post('is_homeless_migrant_runaway')
		);
		$this->db->insert('household_children', $household_children);
	}


}w