<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function listing($category_name) {

        $category = CategoryM::new()->setName($category_name)->get('idx');
        if ($category->getIdx()==null) {
            redirect('/oops/');
        }

        $article_list = ArticleM::new()->setCategoryIdx($category->getIdx())->getList();

        $data = array();
        $data['article_list'] = $article_list;

		$this->load->view('website/template/head');
        $this->load->view('website/page/article_list', $data);
        $this->load->view('website/template/sidebar');
        $this->load->view('website/template/foot');
	}
}
