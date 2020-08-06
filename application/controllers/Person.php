<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Person extends REST_Controller {

	public function __construct() {
       parent::__construct();
       // load the model information
       $this->load->model('Person_model');
        
    }

    //Include first function
	public function Person_get( )
	{
		$this->load->view('welcome_message');
	}
}
