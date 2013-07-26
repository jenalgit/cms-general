<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module extends CI_Controller {

	
	public function index()
	{
            $data['page']='main';
            $this->load->view('layout',$data);
	}
        public function wtf()
	{
		echo "SHIT!!!!";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */