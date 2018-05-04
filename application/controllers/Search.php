<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index() {

        $article_list = array();

        if ($this->input->get('search_text')) {
            $article_list = ArticleM::new()
                                ->setSearchText($this->input->get('search_text'))
                                ->getList();
        }

        $data = array();
        $data['search']         = true;
        $data['article_list']   = $article_list;

		$this->load->view('website/template/head');
        $this->load->view('website/page/article_list', $data);
        $this->load->view('website/template/sidebar');
        $this->load->view('website/template/foot');
	}
}
