<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends Admin_Controller {
  function __construct() {
        parent::__construct();
    }
	public function index()
	{
		$this->load->model('user_model', 'users');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
		);
		$this->render('home', ' sidebar-collapse');
	}
	public function migrate() {
    $this->load->library('migration');

    if ($this->migration->current() === FALSE) {
        show_error($this->migration->error_string());
    }
}

}
