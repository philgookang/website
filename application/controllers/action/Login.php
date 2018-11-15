<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function attempt() {

        $email 		= $this->input->post('email');
		$password 	= $this->input->post('password');

        $email = (strip_tags(str_replace(' ', '', $email)) == "") ? "-1" : strip_tags(str_replace(' ', '', $email));
        $password = (strip_tags(str_replace(' ', '', $password)) == "") ? "-1" : strip_tags(str_replace(' ', '', $password));

        $member = MemberM::new()
                    ->setEmail($email)
                    ->setPassword($password)
                    ->get();

        if ($member->getIdx()) {
			Activity::init()->setData('member', $member);
			Activity::init()->setData('is_login', true);
			redirect('/member/article/');
            return;
        }

		redirect('/login/?attempt=failed');
		return;
	}
}
