<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dragons extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dragon');
	}
	public function main()
	{
		$this->load->view('index.html');
	}
	public function index()
	{
		echo json_encode($this->Dragon->index());
	}
	public function show($id)
	{
		echo json_encode($this->Dragon->show($id));
	}
	public function create()
	{
		$this->Dragon->create(json_decode(file_get_contents('php://input'), true));
		redirect('/');
	}
	public function delete($id)
	{
		$this->Dragon->destroy($id);
		redirect('/');
	}
	public function update($id)
	{
		$this->Dragon->update(json_decode(file_get_contents('php://input'), true), $id);
		redirect('/');
	}
}
