<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->view('user_view');
	}
	public function insertData_controller ()
	{
		$email = $this->input->post('email');
		$fullname = $this->input->post('hoten');
		$birthday = $this->input->post('ngaysinh');
		$address = $this->input->post('diachi');
		$sdt = $this->input->post('sodienthoai');


		$this->load->model('taikhoan_model');
		if ($this->addData_model->insert($email,$fullname,$birthday,$address,$sdt)) {
			echo "insert thanh cong, vao data đe xem nhe";
		}
		else{
			echo "insert that bai xem lai code";
		}
	}

}

/* End of file IndexPhimDC_controller.php */
/* Location: ./application/controllers/IndexPhimDC_controller.php */