<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $site_lang = $ci->session->userdata('site_lang');
        if ($site_lang) {
            $ci->lang->load('table',$ci->session->userdata('site_lang'));
           /* $ci->lang->load('ion_auth',$ci->session->userdata('site_lang'));
            $ci->lang->load("cycle_process",$ci->session->userdata('site_lang'));
            $ci->lang->load("cycle_fileupload",$ci->session->userdata('site_lang'));
            $ci->lang->load("user_interface",$ci->session->userdata('site_lang'));
            $ci->lang->load("faq",$ci->session->userdata('site_lang'));
            $ci->lang->load("contact",$ci->session->userdata('site_lang'));
            $ci->lang->load("manage_account", $ci->session->userdata('site_lang'));*/
        } else {
            $ci->lang->load('table','romanian');
            /*$ci->lang->load('ion_auth','german');
            $ci->lang->load("cycle_process",'german');
            $ci->lang->load("cycle_fileupload",'german');
            $ci->lang->load("user_interface",'german');
            $ci->lang->load("faq", 'german');
            $ci->lang->load("contact", 'german');
            $ci->lang->load("manage_account", 'german');*/
        }
    }
}

