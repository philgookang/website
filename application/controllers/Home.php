<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {

        $article_list = ArticleM::new()->getList();

        $data = array();
        $data['article_list'] = $article_list;

		$this->load->view('website/template/head');
		$this->load->view('website/page/article_list', $data);
        $this->load->view('website/template/sidebar');
        $this->load->view('website/template/foot');
	}
}
