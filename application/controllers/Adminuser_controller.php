<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminuser_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}



     public function index()
	{
		$this->load->model('showtaikhoan_model');		
		$dulieu = $this->showtaikhoan_model->getDatabasetaikhoan();
		$dulieu = array('dulieudaycontroller' => $dulieu);
		$this->load->view('taikhoan_view', $dulieu, FALSE);
		

	}



	public function deletePhim($idnhanduoc)
	{
		$this->load->model('showPhim_model');
		if ($this->showPhim_model->deletePhimById($idnhanduoc)) {
				$this->load->view('xoathanhcong_view');
		} else {
				
		}
	}
	
}

/* End of file InsertPhim_controller.php */
/* Location: ./application/controllers/InsertPhim_controller.php */