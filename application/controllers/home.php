<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function index(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		$this->title = "Initializr + Bootstrap with Codeigniter";
		
		$this->_render_view('pages/home');
	}

	public function components(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		
		$this->_render_view('pages/components');
	}
	
}