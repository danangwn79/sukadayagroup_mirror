<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	public function index()
	{
		$this->load->model('user_model', 'users');
		
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
		);
		
		$this->render('home', ' sidebar-collapse');
	}
	public function getArah(){
		$this->load->model('tbl_arahpengiriman_model', 'arah_pengiriman');
		$data = $this->arah_pengiriman->get(1);

		die(json_encode($data));
	}
}

