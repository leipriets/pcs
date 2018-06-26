<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Auth extends CI_Controller    
{

    public function index() {
        redirect(base_url('auth/login'));
    }

    /**
     *           
     */
    public function login() {
        $data['title'] = 'Login';
        $this->load->model('auth_model');

        if (count($_POST)) {
            $this->load->helper('security');
            $this->form_validation->set_rules('email', 'Email address', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

            if ($this->form_validation->run() == false) {
                $data['notif']['message'] = validation_errors();
                $data['notif']['type'] = 'danger';
            } 
            else {
                $data['notif'] = $this->auth_model->login();
            }
        }

        if ($this->session->userdata('userlogin')) {
            redirect(base_url('dashboard'));
            exit;
        }

        /*
         * Load view
         */

        $this->load->view('auth/includes/authheader', $data);
        $this->load->view('auth/authview');
        $this->load->view('auth/includes/authfooter');
    }    


    public function register(){



        $data['title'] = "Register";

        $this->load->view('includes/header',$data);
        $this->load->view('auth/authview');      
        $this->load->view('auth/includes/authfooter');


    }

    public function auth_register(){

            $param = array();

            $this->load->model('auth_model');
            $this->load->helper('security');

            $this->form_validation->set_error_delimiters("<p style='color:#fff'>","</p>");
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[useracct.email]');
            $this->form_validation->set_rules('username','Username','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
            $this->form_validation->set_rules('confirmpass','Confirm Password','trim|required|matches[password]|min_length[6]|alpha_numeric|callback_password_check');

            if ($this->form_validation->run() == false) {
                $data['notif']['message'] = validation_errors();
                $data['notif']['type'] = 'danger';
            }else{
                $params['email'] = $this->input->post('email');
                $params['username'] = $this->input->post('username');
                $params['password'] = $this->input->post('confirmpass');
                $data['notif'] = $this->auth_model->registerModel($params);

            }


            echo json_encode($data);
    }



    /*
     * Custom callback function
     */

    public function password_check($str) {
        if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
            return true;
        }
        return false;
    }

    public function logout() {
        $this->session->unset_userdata('userlogin');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect(base_url('auth/login'));
    }


}

?>