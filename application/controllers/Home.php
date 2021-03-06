<?php 

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  

		$this->load->model('Admin/AdminModel', 'am');
		$this->load->model('Common_Model', 'cm');

		$this->load->library('email');

		
	} 

	function email_home()
	{
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'nickty.84@gmail.com';
		$config['smtp_pass'] = 'jijU126721';
		$config['smtp_port'] = 465;
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$from_email =  $this->input->post('email');
		$to_email = "rangpurdev@gmail.com"; 
		$name = $this->input->post('name');
		$message = $this->input->post('message');
        //Load email library
		$this->load->library('email');

		$this->load->helper('form');
		$this->email->from($from_email, $name);
		$this->email->to($to_email);
		$this->email->subject('PWA Website Home Page');
		$this->email->message($message);
        //Send mail
		if($this->email->send())
		{
			$this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
			return redirect('home/index');
		}

		else{
			$this->session->set_flashdata("email_sent","You have encountered an error");
			return redirect('home/index');
		}
	}


	function email(){
		

		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'nickty.84@gmail.com';
		$config['smtp_pass'] = 'jijU126721';
		$config['smtp_port'] = 465;
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$from_email =  $this->input->post('email');
		$to_email = "rangpurdev@gmail.com"; 
		$name = $this->input->post('name');
		$message = $this->input->post('message');
        //Load email library
		$this->load->library('email');

		$this->load->helper('form');
		$this->email->from($from_email, $name);
		$this->email->to($to_email);
		$this->email->subject('PWA Website Contact Page');
		$this->email->message($message);
        //Send mail
		if($this->email->send())
		{
			$this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
			return redirect('home/contact');
		}

		else{
			$this->session->set_flashdata("email_sent","You have encountered an error");
			return redirect('home/contact');
		}
		
	}

	

	public function index()
	{
		


		$this->load->view('includes/header.php');
		$this->load->view('home/index.php');
		$this->load->view('includes/footer.php');   
	}	

	public function privacy()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/privacy.php');
		$this->load->view('includes/footer.php');   
	}

	public function disclaimer()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/disclaimer.php');
		$this->load->view('includes/footer.php');   
	}

	public function faq()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/faq.php');
		$this->load->view('includes/footer.php');   
	}

	public function contact()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/contact.php');
		$this->load->view('includes/footer.php');   
	}

	public function pwafromstratch()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/pwafromstratch.php');
		$this->load->view('includes/footer.php');   
	}
	
	public function migration_to_pwa()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/migration-to-pwa.php');
		$this->load->view('includes/footer.php');
	}

	public function pwa_optimize()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/pwa-optimize.php');
		$this->load->view('includes/footer.php');
	}

	public function pwa_seo()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/pwa_seo.php');
		$this->load->view('includes/footer.php');
	}

	public function pwa_maintenance()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/pwa-maintenance.php');
		$this->load->view('includes/footer.php');
	}

	public function work()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/work.php');
		$this->load->view('includes/footer.php');
	}

	public function web_design()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/website_design.php');
		$this->load->view('includes/footer.php');
	}

	public function web_development()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/web_development.php');
		$this->load->view('includes/footer.php');
	}

	public function soft_development()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/soft_development.php');
		$this->load->view('includes/footer.php');
	}

	public function graphic_design()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/graphic_design.php');
		$this->load->view('includes/footer.php');
	}

	public function register()
	{

		// $cmails = $this->db->select($email)->from('clients')->get();
		// $allemails = $cmails->result_array();
		//return print_r($_POST['password']); 

		$email = $_POST['email']; 

		$chekmail = $this->am->CheckMail($email);

		if ($chekmail) {
			echo 3; 
		} else 
		{
			if ($_POST['password'] != $_POST['rpassword']) {
				echo 2; 
			} else 
			{
				$res = $this->db->insert('clients', $_POST); 

				if ($res) {
					echo 1; 
				} else 
				{
					return false; 

				}
			}
		}


		

		
	}

	public function dashboard()
	{
		if ($this->session->userdata('client_email') == "" && $this->session->userdata('client_password') == "") {
			return redirect('home/index');
		} else 
		{
			$client_email = $this->session->userdata('client_email'); 

			$data['client'] = $this->cm->select_data('clients', ['email' => $client_email]);

			$this->load->view('includes/header.php');
			$this->load->view('client/cdashboard.php', $data);
			$this->load->view('includes/footer.php');


		}
		
	}

	public function login()
	{
		$email = $_POST['email']; 
		$password = $_POST['password'];

		//return print_r($_POST); 

		$result = $this->am->Login($email, $password); 


		if ($result) {

			$client_session = [
				'client_email' => $email, 
				'client_password' => $password
			]; 
			$this->session->set_userdata($client_session); 
			return redirect('home/dashboard'); 
			echo 0;

		} else 
		{
			echo 1;  
		}
	}

	public function Logout()
	{

		$this->session->unset_userdata('client_email'); 
		$this->session->unset_userdata('client_password'); 
		return redirect('home/index'); 
	}

	public function request()
	{
		$this->load->view('includes/header.php');
		$this->load->view('home/request.php');
		$this->load->view('includes/footer.php');
	}

	public function request_quote()
	{
		// print_r($_POST); 

		if(!empty($_POST['interested'])){
// Loop to store and display values of individual checked checkbox.
			foreach($_POST['interested'] as $selected){
				echo $selected."</br>";

				$sel[] = $selected;  
			}
		}

		if(!empty($_POST['group3'])){
// Loop to store and display values of individual checked checkbox.
			foreach($_POST['group3'] as $checked){
				echo $checked."</br>";
			}
		}

		$message = ''; 

		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'nickty.84@gmail.com';
		$config['smtp_pass'] = 'jijU126721';
		$config['smtp_port'] = 465;
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$from_email =  $this->input->post('email');
		$to_email = "rangpurdev@gmail.com"; 
		$name = $this->input->post('name');
		$message .= $this->input->post('texta');
		$message .= $checked; 
		$message .= $sel; 
        //Load email library
		$this->load->library('email');

		$this->load->helper('form');
		$this->email->from($from_email, $name);
		$this->email->to($to_email);
		$this->email->subject('Get a quote');
		$this->email->message($message);
        //Send mail
		if($this->email->send())
		{
			$this->session->set_flashdata("email_sent","Congragulation Request Send Successfully.");
			return redirect('home/request');
		}

		else{
			$this->session->set_flashdata("email_sent","You have encountered an error");
			return redirect('home/request');
		}
	}

}	