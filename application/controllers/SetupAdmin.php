<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SetupAdmin extends CI_Controller {

    
    public function index()
    {
        $this->template->load('navAdmin','setupAdmin');
    }
}
