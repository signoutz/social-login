<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('google');
	}
	
	public function index(){
		// cal loginwithgg
	}
	
	public function loginwithgg_success(){
		$this->google->setAccessToken();
		$user = $this->google->getUserInfo();
		echo '<pre>';
		print_r($user);
		echo '</pre>';
	}
	
	public function loginwithgg(){
		$rs = $this->google->getLoginUrl();
		redirect($rs);
	}
	
}
