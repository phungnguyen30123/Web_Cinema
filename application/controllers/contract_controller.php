<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contract_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->view('contract_view');
	}

}

/* End of file IndexPhimDC_controller.php */
/* Location: ./application/controllers/IndexPhimDC_controller.php */