<?php

class Contoh extends CI_Controller
{

	public function index()
	{
		$this->load->model('m_toko');
		$data['toko'] = $this->m_toko->get_data();

		$this->load->view('view_toko', $data);
	}
}
