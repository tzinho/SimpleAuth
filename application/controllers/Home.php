<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CustomController {
	public function index()	{
		$this->load->view('home');
	}
}
