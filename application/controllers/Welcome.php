<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('login');
	}
         public function dashboard()
        {
            $this->load->view('dashboard'); 
        }
        public function surveyordetails(){
            $this->load->view('surveyor_details'); 
        }
        public function arogyatapasni(){
            $this->load->view('arogya_tapasni'); 
        }
        public function karyakram(){
            $this->load->view('karyakram_vyavasthapan'); 
        }
        public function balakjanm(){
            $this->load->view('balak_janm'); 
        }
        public function arogyaabhipray(){
            $this->load->view('arogya_abhipray'); 
        }
}
