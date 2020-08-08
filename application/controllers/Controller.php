<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function sign_in()
	{
		$this->load->view('customer/sign_in');
	}
	public function sign_up()
	{
		$this->load->view('customer/sign_up');
	}
	public function home()
	{
		$this->load->view('customer/home');
	}
	public function item_details()
	{
		$this->load->view('customer/item_details');
	}
	public function terms_condition()
	{
		$this->load->view('customer/terms_condition');
	}
}
