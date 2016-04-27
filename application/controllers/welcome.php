<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


		$this->load->database();
	}

	public function index()
	{
//		$this->load->model('oms_order_model');
//		$this->oms_order_model->getOmsOrder();

		$params = $this->input->get();



		$this->load->library('pagination');

		$config['base_url'] = 'http://www.my_theone.com?c=welcome&m=index';
		$config['total_rows'] = 2000;
		$config['per_page'] = 20;

		$config['num_links'] = 5;

		$config['page_query_string'] = TRUE;
		$config['enable_query_strings'] = TRUE;



		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';


		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';


		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data['page_links'] = $this->pagination->create_links();


		$this->load->view('welcome_message',$data);
	}


}

