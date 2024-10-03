<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// session_start();

class Login_register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	public function indexlogin()
	{
		$this->load->view('login_view');

	}


	public function login()
	{

		//lấy dữ liệu từ view
		$email = $this->input->post('user-email');
		$password = $this->input->post('user-password');

		  //$_SESSION['mail'] = $email;

		//gửi 2 biến trên sang model
		$this->load->model('login_model');
		$result = $this->login_model->getDatabyEmail($email) ;




		

		foreach ($result as $value) {
			if (($value['password'] == md5($password)) && ($value['is_admin'] == 0)) {
				$id_user = $value['id'];


				$this->load->view('khachhangthanhcong_view');
				$this->session->set_userdata('vipmember', $email);


				$_SESSION['id_user'] = $id_user;

				
			} elseif (($value['password'] == md5($password)) && ($value['is_admin'] == 1)) {
				$id_user = $value['id'];
				$this->load->view('adminthanhcong_view');
				$this->session->set_userdata('vipmembe', $email);


				$_SESSION['id_user'] = $id_user;
			}
				// $_SESSION['id'] = $value['id'];
				//echo $_SESSION['id'] ;
			elseif (($value['password'] == md5($password)) && ($value['is_admin'] == 2)) {
				$id_user = $value['id'];
				$this->load->view('nhanvienthanhcong_view');
				
				$this->session->set_userdata('vip2', $email);
				$_SESSION['id_user'] = $id_user;
				


			} else {
				$message = "Đăng nhập thất bại";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->indexlogin();
			}

			
		}


	}
	

	public function indexregister()
	{
		$this->load->view('register_view');
	}

	public function register()
	{

		//lấy dữ liệu từ view về
		$email = $this->input->post('user-email');
		$password = $this->input->post('user-password');
		$password_re = $this->input->post('user-password-re');
		$fullname = $this->input->post('user-name');
		$birthday = $this->input->post('user-datebirth');
		$sdt = $this->input->post('user-sdt');
		$address = $this->input->post('user-address');

		if($email && $password && $password_re && $fullname && $birthday && $sdt && $address) {
			//đưa dữ liệu sang model
			$this->load->model('register_model'); 
			if($this->register_model->insert($email, md5($password), md5($password_re),  $fullname, $birthday, $sdt, $address)){
				$this->load->view('dkythanhcong_view');
			}
			else {
				$message = "Đăng ký thất bại";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$this->indexregister();
			}

		}
		
		
		
	}

	

}

/* End of file Login_register.php */
/* Location: ./application/controllers/Login_register.php */