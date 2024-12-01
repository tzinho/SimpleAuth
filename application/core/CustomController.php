<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomController extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
}
}