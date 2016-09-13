<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nums extends CI_Controller {

	public function index()
	{
		$this->load->view('nums_data');
	}
}
