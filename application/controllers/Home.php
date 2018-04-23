<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->view('website/template/head');
        $this->load->view('website/page/home');
        $this->load->view('website/template/sidebar');
        $this->load->view('website/template/foot');
	}
}
