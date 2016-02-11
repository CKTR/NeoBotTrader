<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assemble extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		//Sets the variable $head to use the slice head (/views/slices/head.php)
		$this->stencil->slice('head');

		//Sets the variable $header to use the slice header (/views/slices/header.php)
		$this->stencil->slice('header');
	}
        
        public function pieces()
	{
		$this->stencil->title('Assemble');
		$this->stencil->layout('subpage_layout');

		//Slices are view snippets that can be reused over and over again.
		//They can either be simple and basic or very robust and powerful.
		//For full explanation of what they can do, please visit the docs.
		$this->stencil->slice('sidebar');

		$data['subpage_text'] = 'A Subpage Example!';
		$this->stencil->paint('assemble_view', $data);
	}
        

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */