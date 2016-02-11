<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Application class
 *
 * base class for whole application. 
 */
class Application extends CI_Controller 
{
	public function __construct() 
	{
	  parent::__construct();
		
		//	display profiler if in development
		if (ENVIRONMENT == 'development') {
			$this->output->enable_profiler(TRUE);
		}
	}
}
