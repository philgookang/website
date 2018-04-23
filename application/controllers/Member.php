<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function article() {

        $article_list = ArticleM::new()->setMemberIdx(1)->getList();

        $data = array();
        $data['article_list'] = $article_list;

		$this->load->view('website/template/head');
        $this->load->view('website/page/member/article', $data);
        $this->load->view('website/template/foot');
	}

    public function aedit($idx = '0') {

        $article = ArticleM::new()->setIdx($idx)->setMemberIdx(1)->get();

        $data = array();
        $data['article'] = $article;

		$this->load->view('website/template/head');
        $this->load->view('website/page/member/article_edit', $data);
        $this->load->view('website/template/foot');
	}
}
