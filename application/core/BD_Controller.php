<?php defined('BASEPATH') or exit('No direct script access allowed');

class BD_Controller extends CI_Controller
{
	protected $vendorId = '';
    protected $name_th = '';
    protected $name_en = '';
    protected $global = [];

    public function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != true) {
            redirect(base_url('login'));
        } else {
            $this->userId = $this->session->userdata('Id');
            $this->usernaem = $this->session->userdata('username');
           
        }
    }
    public function response($data = NULL,$http_code = NULL)
	{
		$this->output->set_content_type('application/json')
        ->set_output(json_encode($data));
	}


}