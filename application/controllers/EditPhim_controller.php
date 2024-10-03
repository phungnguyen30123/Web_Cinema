<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EditPhim_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		
	}

	public function editPhim($idnhantuview)
	{
		$this->load->model('showPhim_model');
		$ketqua = $this->showPhim_model->getDatabasePhimById($idnhantuview);
		$ketqua = array('dulieutucontroller' =>$ketqua);
		$this->load->view('editPhim_view', $ketqua, FALSE);
	}

	public function updatePhim()
	{
		//lấy dữ liệu view về

		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$duration = $this->input->post('duration');
		$director = $this->input->post('director');
		$actor = $this->input->post('actor');
		$language = $this->input->post('language');
		$country= $this->input->post('country');
		$decription = $this->input->post('description');
		$open_date = $this->input->post('open_date');
		$category= $this->input->post('category');

		$this->load->model('showPhim_model');
		if ($this->showPhim_model->updatePhimById($id, $title, $duration,$director, $actor,$language,$country,$decription,$open_date, $category)) {
			$this->editPhim($id);
		} else {
			echo"Không thành công";
		}
		
	}

}

/* End of file editPhim_controller.php */
/* Location: ./application/controllers/editPhim_controller.php */