<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('website/template/head');
        $this->load->view('website/page/login');
        $this->load->view('website/template/sidebar');
        $this->load->view('website/template/foot');
	}
}
