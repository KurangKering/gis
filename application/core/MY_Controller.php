<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		!$this->session->userdata('loged_in') ? redirect('auth') : '';
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */