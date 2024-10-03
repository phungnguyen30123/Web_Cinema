<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showPhim_model');
		$dulieuPhimDC = $this->showPhim_model->getdatabasePhimDC();
		$dulieuPhimDC = array('dulieuPhimDCcon' => $dulieuPhimDC );
		$this->load->view('Index_view', $dulieuPhimDC, FALSE);
	}

}

/* End of file IndexPhimDC_controller.php */
/* Location: ./application/controllers/IndexPhimDC_controller.php */