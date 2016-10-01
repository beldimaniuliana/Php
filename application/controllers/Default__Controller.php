<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Default_Controller extends CI_Controller {
    /**
     * Sets the access level you need to access this controller/page.
     *
     * @var string
     * @access protected
     */
    protected $access_level = 'admin';

    function __construct() {
        // this page is only visible for admin
        parent::__construct($this->access_level);

    }

    public function index() {

    }
}

