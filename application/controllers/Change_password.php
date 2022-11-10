<?php

class Change_password extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Change_password_model');
    $this->load->library('form_validation');
  }
}