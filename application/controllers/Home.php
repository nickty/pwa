<?php 

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  

		
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
	
}