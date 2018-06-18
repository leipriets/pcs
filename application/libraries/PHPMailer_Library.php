<?php 
/**
 * @author: Leo
 * @copyright 2018
 */
class PHPMailer_Library 
{
	
    public function __construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load()
    {

        require_once(APPPATH."third_party/vendor/autoload.php");
        $objMail = new PHPMailer;
        return $objMail;
    }

}




?>