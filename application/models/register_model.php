<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($e, $p, $pr, $n, $b, $s, $a)
	{
		
		if ($p != $pr) {
			$message = "Mật khẩu và mật khẩu xác nhận không trùng khớp";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$dulieu = array('email' => $e , 'password' => $p , 'password_re'=> $pr, 'fullname' => $n, 'birthday' => $b, 'sdt' => $s, 'address' =>  $a );
		$this->db->insert('user', $dulieu);
		return $this->db->insert_id();
		}
		
	}

}

/* End of file register_model.php */
/* Location: ./application/models/register_model.php */