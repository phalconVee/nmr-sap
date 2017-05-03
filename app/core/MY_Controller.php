<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	 function __construct() {
    	parent::__construct();
		global $data;
		//load site details globally
		$data['site_url']      = base_url();
		$data['site_name']     = $this->config->item('site_name');
		$data['assets_folder'] = $this->config->item('theme_files');
		$data['admin_email']   = $this->config->item('admin_email');
		$data['admin_name']    = $this->config->item('admin_name');

		
		if(empty($_SESSION['w3_admin_id'])) {

		}
		elseif(!empty($_SESSION['w3_admin_id'])){
			$data['w3_admin_id']       = $_SESSION['w3_admin_id'];
			$data['w3_logged_in']      = $_SESSION['w3_logged_in'];
		}
	 }

	function send_email($to, $subject, $message)
	{
		global $data;

		$this->load->library('email');
		$this->email->set_newline("\r\n");

		$this->email->from($data['admin_email'], $data['site_name']);
		$this->email->reply_to($data['admin_email'], $data['site_name']);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		return true;
	}

	function send_quote_email($to, $subject, $message)
	{
		global $data;

		$this->load->library('email');
		$this->email->set_newline("\r\n");

		$this->email->from("sales@3mandd.com", "3mandd.com");
		//$this->email->reply_to("sales@3mandd.com", "3mandd.com");
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		return true;
	}

	function contact_email($from, $subject, $message)
	{
		global $data;

		$this->load->library('email');
		$this->email->set_newline("\r\n");

		$this->email->from($from);
		$this->email->reply_to($from);
		$this->email->to("info@nmr-int.com");
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		return true;
	}

}