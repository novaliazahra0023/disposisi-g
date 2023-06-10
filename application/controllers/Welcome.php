<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function about()
	{
	// fungsi untuk me-load view about.php
	$this->load->view('about');
	}
	public function profile()
	{
	// fungsi untuk me-load view contact.php
	$this->load->view('profile');
	}
}
