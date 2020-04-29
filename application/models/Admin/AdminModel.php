<?php 
/**
 * Admin Model
 */
class AdminModel extends CI_Model
{
	public function __construct()
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

	public function Login()
	{
		$check_admin = $this->db->get_where('clients', ['email' => $_POST['email'], 'password' => $_POST['password']]); 

		if ($check_admin->num_rows() > 0) {
			return true;
		} else 
		{
			return false;
		}
	}
}	
