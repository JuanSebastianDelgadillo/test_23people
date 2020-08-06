<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

// http://35.247.252.19/23people/Restserver/courses/

class Test extends REST_Controller {

	public function __construct() {
       parent::__construct();
       // load the model information
       $this->load->model('Test_model');
        
    }

    //function get all peoples
    public function peoples_get()
	{	
		$data = array();
		$data = $this->Test_model->get_all_people();
		echo json_encode($data);

	}
	//function permit get people by national id
	public function people_get( $nationalId = null)
	{	

		$data = array();
		if (isset($nationalId)) 
		{
			$data = $this->Test_model->get_people_by_id($nationalId);
			if (count($data) == 0) {
				$data = array('status' => 404);
			}

		}else{
			$data = array();
			$data = $this->Test_model->get_all_people();
		}
		echo json_encode($data);
	}

	//function permit create a new person
	public function people_post()
	{	
		$data = array();
		if (json_decode(trim(file_get_contents('php://input')), true)) {
			$input_data = json_decode(trim(file_get_contents('php://input')), true);
			if (count($input_data)>0) {
				$resp = $this->Test_model->save_data($input_data);
				if ($resp == 1) {
					$data = array('status' => 201);
				}else{
					$data = array('status' => 500);
				}
			}else{
				$data = array('status' => 500);
			}
		}else{

			$data = array('status' => 400);
		}


 		echo json_encode($data);

	}

	public function people_put( $nationalId = null )
	{	
		if ($nationalId != null) {
			$data = array();
			if (json_decode(trim(file_get_contents('php://input')), true)) {
				$input_data = json_decode(trim(file_get_contents('php://input')), true);
				if (count($input_data)>0) {
					$resp = $this->Test_model->update_data($input_data);
					if ($resp == 1) {
						$data = array('status' => 201);
					}else{
						$data = array('status' => 501);
					}
				}else{
					$data = array('status' => 500);
				}
			}else{

				$data = array('status' => 400);
			}
		}else{
			$data = array('status' => 500);
		}
 		echo json_encode($data);

	}

	public function people_delete($id)
	{	
		$resp = $this->Test_model->delete_person($id);
		if ($resp) {
			$data = array('status' => 201);
		}else{
			$data = array('status' => 404);
		}
 		echo json_encode($data);

	}



}
