<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Errorpage extends CI_Controller {

	public function notfound() {

		$this->load->view('website/template/head');
        $this->load->view('website/page/notfound');
        $this->load->view('website/template/sidebar');
        $this->load->view('website/template/foot');
	}
}
