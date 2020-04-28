<?php 
/**
 * Admin Model
 */
class AdminModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct(); 
	}

	public function CheckMail($email)
	{
		$check_email = $this->db->get_where('clients', ['email' => $email]); 

		if ($check_email->num_rows() > 0) {
			return true;
		} else 
		{
			return false;
		}
	}

	public function Login($email, $password)
	{
		$check_admin = $this->db->get_where('clients', ['email' => $email, 'password' => $password]); 

		if ($check_admin->num_rows() > 0) {
			return true;
		} else 
		{
			return false;
		}
	}
}	
