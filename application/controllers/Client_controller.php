<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Client class
 *
 * base class for client
 */

require_once APPPATH . '/controllers/Application_controller.php';

class Client_controller extends Application_controller
{

	/**
	 * Global array to be passed to all child controller methods
	 * @var array
	 */
	public $global = array();

	/**
	 * Default Language
	 * @var string
	 */
	protected $default_language = 'english';

	public function __construct()
	{
	  parent::__construct();
		$this->load->helper('client');
		$this->load->helper('form');
		$this->global['language_list'] = $this->config->item('language_list');
		$this->check_language();	//	check language and set to default if not set

		//	set current
		$this->global['nav'] = $this->uri->segment(1);

		//	load language file
		$this->lang->load('client', $this->session->userdata('language'));
	}

	/**
	 * Default index page
	 * @return [type] [description]
	 */
	public function index()
	{
		$this->load->helper('form');
		$data['app'] = array(
			'title' => $this->lang->line('welcome_title'),
			'view'  => 'pages/welcome',
			'scripts' =>array(
				'lib/validator/dist/validator.min.js',
				'js/form/form.js'
			)
		);
		
		$data['form'] = array(
			'process' => 'apply/process'
		);

		$data['global'] = $this->global;

		$this->load->view('layout/application', $data);
	}

	/**
	 * [language description]
	 * @return [type] [description]
	 */
	public function language() {
		$language = $this->uri->segment(3);
		$this->set_language($language);

		$redirect = urldecode($this->input->get('redirect'));
		if (!empty($redirect)) {
			redirect($redirect);
		} else {
			redirect();
		}
	}

	/**
	 * [set_language description]
	 * @param string $language [description]
	 */
	protected function set_language($language) {
		if (array_key_exists($language, $this->config->item('language_list'))) {
			$this->session->set_userdata('language', $language);
		} else {
			$this->session->set_userdata('language', 'english');
		}
	}

	/**
	 * [check_language description]
	 * @return [type] [description]
	 */
	protected function check_language() {
		if (empty($this->session->userdata('language'))) {
			$this->session->set_userdata('language', $this->default_language);
		}
		//	set current language
		$this->global['current_language'] = $this->session->userdata('language');
	}
}
