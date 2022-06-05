<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_SI extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('utama');
	}

    public function login()
	{
		$this->load->view('login');
	}

	public function registrasi()
	{
		$this->load->view('registrasi');
	}
}
