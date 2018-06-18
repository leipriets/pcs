<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Dashboard extends CI_Controller
{
	

    var $session_user;

    function __construct() {
        parent::__construct();

        Utils::no_cache();
        if (!$this->session->userdata('userlogin')) {
            redirect(base_url('auth/login'));
            exit;
        }
        $this->session_user = $this->session->userdata('userlogin');


    }

	public function index(){

		$data['title'] = "PCS";
		$data['session_user'] = $this->session_user;


		$this->load->view('includes/header',$data);
		$this->load->view('includes/sidenav');
		$this->load->view('includes/navbar');
		$this->load->view('dashboardview');
		$this->load->view('includes/footer');

	}


}



?>