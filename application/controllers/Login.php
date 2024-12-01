<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CustomController {
  public function __construct() {
    parent::__construct();
    $this->load->model('User');
    $this->load->library('session');
  }

  public function index() {
    $this->load->view('login');
  }

  public function authenticate() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->user->getUser($username);
    
    if ($user && password_verify($password, $user->password)){
      $this->session->set_userdata('user_id', $user->id);
      $this->session->set_userdata('username', $user->username);
      redirect("dashboard");
    } else {
      $this->session->set_flashdata('error', 'Invalid username or password');
      redirect('login');
    }
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('login');
  }
}