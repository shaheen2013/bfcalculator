<?php

/*****
*
* @Author: Nasid Kamal.
*
*****/

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {

        parent::__construct();
        $this->load->model('User_model');

    }

    function index() {

    	redirect('user/login');

    }

    public function register() {

    	if(isset($_POST) && count($_POST) > 0) {

    		$userParams = array(
    			'email' => $this->input->post('email'),
                'name' => $this->input->post('name'),
                'password' => $this->input->post('password'),
                'age' => $this->input->post('age'),
                'sex' => $this->input->post('sex'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
                'fitness' => (int)$this->input->post('fitness')
            );

            $user = $this->User_model->get_user_by_email($userParams['email']);

            if($user == null) {

            	$uid = $this->User_model->add_user($userParams);

            	if($uid > 0) {

            		$this->confirmation();

            		//redirect('user/confirmation');
            	}

            } else {

            	$data['errorMessage'] = 'Sorry, Your Email Is Already Registered...!';
            	$data['_view'] = 'user/register';
        		$this->load->view('layouts/main',$data);

            }

    	} else {

    		//$data['errorMessage'] = 'Sorry, Your Email Is Already Registered...!';

    		$data['_view'] = 'user/register';
        	$this->load->view('layouts/main',$data);

    	}

    }

    function login() {

    	if(isset($_POST) && count($_POST) > 0) {

    		$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->User_model->authenticate_user($email, $password);

			if($user != null) {

				echo 'Successful';
				

			} else {

				$data['errorMessage'] = 'Sorry, Email and Password did not match...!';
            	$data['_view'] = 'user/login';
        		$this->load->view('layouts/main',$data);

			}

    	} else {

    		$data['_view'] = 'user/login';
        	$this->load->view('layouts/main',$data);


    	}


    }

    private function confirmation() {

    	$data['_view'] = 'user/confirmation';
        $this->load->view('layouts/main',$data);

    }

    function forgot_password() {

        echo 'ok';
    }
	
}