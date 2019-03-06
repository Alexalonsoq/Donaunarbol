<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('inicio');
	}



public function arbolito()
	{
		$this->load->view('menu');
		$this->load->view('tuarbolito');
		
	
	}

public function somos()
	{
		$this->load->view('menu');
		$this->load->view('somos');
		
	
	}
public function contacto()
	{
		$this->load->view('menu');
		$this->load->view('contacto');
		
	
	}

	public function campana()
	{
		$this->load->view('menu');
		$this->load->view('campana');
		
	
	}
	public function sus()
	{
		$this->load->view('menu');
		$this->load->view('sus');
		
	
	}

	

	

}