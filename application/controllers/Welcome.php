<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data["page_title"] = $this->lang->line("page_title");
		$data["line1"] = $this->lang->line("line1");
		$data["line2"] = $this->lang->line("line2");
		$data["line3"] = $this->lang->line("line3");
		$data["line4"] = $this->lang->line("line4");
		$data["render_info1"] = $this->lang->line("render_info1");
		$data["render_info2"] = $this->lang->line("render_info2");
		$data["version_label"] = $this->lang->line("version_label");
		$data["english_label"] = $this->lang->line("english_label");
		$data["portuguese_label"] = $this->lang->line("portuguese_label");
				
		$this->load->view('welcome_message', $data);
	}
}
