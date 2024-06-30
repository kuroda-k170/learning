<?php
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    $this->load->library(array('parser','form_validation','pagination','user_agent'));
    $this->load->helper(array('form','url','array','file','cookie'));

    }
}
?>