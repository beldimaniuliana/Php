<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lang_control extends CI_Controller {
    
    protected $access_level = 'user';
    
    function __construct() {
        
        parent::__construct($this->access_level);
        $this->load->helper('url');
    }

    
	public function change_language($language = '') {
        $language = ($language != "") ? $language : "english";

        $this->session->set_userdata('site_lang', $language);

        $this->load->library('user_agent');

        if($this->agent->is_referral()){
            redirect($this->agent->referrer());
       }
        else{
           // if($this->ion_auth->is_admin())
              //  redirect('table_controller/index', 'refresh');
           // else
                //redirect('dashboard', 'refresh');
              //  redirect('table_controller', 'refresh');
           redirect($this->agent->referrer());
        }
	}
       
        
        
}