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

    	redirect('user/register');

    }

    public function register() {

    	
    	$data['_view'] = 'user/register';
        $this->load->view('layouts/main',$data);

    }

    function login() {

    	$data['_view'] = 'user/login';
        $this->load->view('layouts/main',$data);

    }
	
}