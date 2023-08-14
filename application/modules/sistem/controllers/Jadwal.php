<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends Admin_Controller {

	public function index()
	{
		
		$this->render('jadwal', ' sidebar-collapse');
	}
}
