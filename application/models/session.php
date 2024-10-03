<?php 
class Session extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->load->database();

        $this->load->model('login_model');

        $this->load->library('form_validation');

        $this->load->library('session');

	}

	public function form()
	{
		$this->load->view('login_view');
	}


	public function check()
	{
		$this->form_validation->has_rule('user-email', 'user email' ,'trim|required');
		$this->form_validation->has_rule('Password', 'Password' ,'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('session/form');
		} else
		{

			$user_email=$this->input->post('user_email');
			$user_pass=$this->input->post('password');
			$session=$this->login_model->user_check($user_email,$user_pass);
			if (count($session)>0)
		    {
		    	$session_array = array('id' =>$session[0]->id , 'user_email' =>$session[0]->email);
		    	 $this->session->set_userdata('loggedIn' , $session_array);
		    	 redirect('login/secure');
			} else{
				$this->session->set_flashdata('error','something went wrong');

				redirect('session/form');
			}

		}
	}

	public function secure()
	{
		if ($this->load->userdata('loggedIn')) {
			$this->load->view('');
		}
		else{
			redirect('session/form');

		}
		
	}
}