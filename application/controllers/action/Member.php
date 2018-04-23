<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function asave() {

        $idx            = (is_numeric($this->input->post('idx'))) ? $this->input->post('idx') : -1;
        $title          = $this->input->post('title');
        $content        = $this->input->post('content');
        $r_date_time    = $this->input->post('release_date_time');

        $article = ArticleM::new()
                    ->setIdx($idx)
                    ->setMemberIdx(1)
                    ->setTitle($title)
                    ->setContent($content)
                    ->setReleaseDateTime($r_date_time)
                    ->setUpdatedDateTime(date('Y-m-d H:i:s'));

        $check = $article->get();

        if ($check->getIdx() == null) {
            $article->create();
        } else {
            $article->update();
        }

        redirect('/member/article/');
	}
}
