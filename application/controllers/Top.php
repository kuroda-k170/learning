<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$users = [
			0 => [
				'name' 		=> '黒田',
				'id' 		=> '4528',
				'job_type' 	=> 10,
			],
			1 => [
				'name' 		=> '加藤',
				'id' 		=> '4158',
				'job_type' 	=> 10,
			],
			2 => [
				'name' 		=> '小泉',
				'id' 		=> '4558',
				'job_type' 	=> 10,
			],
			3 => [
				'name' 		=> '田中',
				'id' 		=> '3558',
				'job_type' 	=> 20,
			],
			4 => [
				'name' 		=> '山田',
				'id' 		=> '2558',
				'job_type' 	=> null,
			],
		];
		$list[0] = "すべて";
		$list[-1] = "<担当者なし>";
		foreach($users as $tantou) {
			$list[$tantou['job_type'] == '10' ? '医者' : ($tantou['job_type'] == '20' ? '看護師' : '事務')][$tantou['id']] = $tantou->name;
		}
		$data['list'] = $list;
		$this->load->helper('form');
		$this->load->view('index', $data);
	}
	public function sub()
	{
		$this->load->view('sub');
	}
}
