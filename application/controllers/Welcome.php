<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->helper('url');
        $this->load->model('User_model');
        $this->load->library('session');
        // Your own constructor code
    }

    public function index() {
        $this->load->view('login');
    }

    public function login() {

        $password = $this->input->get_post('password');
        $username = $this->input->get_post('username');

        //$password = 'user@123'; $username = '9975294782';
        $client = $this->User_model->isClientExist($username, $password);
        if (count($client) == 1) {
            $this->session->set_userdata("user", $client);
            redirect(base_url('Welcome/dashboard'), 'refresh');
        } else {
            redirect(base_url('Welcome/index'));
        }
    }

    public function logout() {

        $this->session->unset_userdata('user');

        redirect(base_url('Welcome/index'));
    }

    public function dashboard() {

        $data['years'] = $this->User_model->getYearsList();
        $this->load->view('dashboard', $data);
    }

    public function ajax_getMonthsList() {
        $result = array();
        $year = $this->input->get_post('year');
        $years = $this->User_model->getMonthsList($year);
        if (count($years) > 0) {
            $result['code'] = 1;
            $result['result'] = $years;
            $result['message'] = "Data found";
        } else {
            $result['code'] = 0;
            $result['result'] = [];
            $result['message'] = "No Any Records avalable";
        }

        echo json_encode($result);
    }

    public function ajax_getServayersList() {
        $result = array();
        $year = $this->input->get_post('year');
        $month = $this->input->get_post('month');
        $data = $this->User_model->getServayers($month, $year);
        if (count($data) > 0) {
            $result['code'] = 1;
            $result['result'] = $data;
            $result['message'] = "Data found";
        } else {
            $result['code'] = 0;
            $result['result'] = [];
            $result['message'] = "No Any Records avalable";
        }
        echo json_encode($result);
    }

    public function surveyordetails() {
        $data= array();
         $data["year"] = $this->input->get_post('year');
         $data["month"] = $this->input->get_post('month');
          $data["userid"] = $this->input->get_post('userid');
        $data["user"]=$this->User_model->isgetUser($data["userid"]);
        
//        echo json_encode($data);
//       die();
        $this->load->view('surveyor_details',$data);
    }

    public function arogyatapasni() {
        
        
        
         $data["year"] = $this->input->get_post('year');
         $data["month"] = $this->input->get_post('month');
          $data["userid"] = $this->input->get_post('userid');
          $data["category"] = $this->input->get_post('category');
          $data["user"]=$this->User_model->isgetUser($data["userid"]);
          $data["category_data"]=$this->User_model->getCategory($data["category"]);
         
        $data["report"]=$this->User_model->getReport($data["month"], $data["year"],$data["category"],$data["userid"]);
//        echo json_encode($data["category_data"]);
//        die();
        $this->load->view('arogya_tapasni',$data);
    }

    public function karyakram() {
        $this->load->view('karyakram_vyavasthapan');
    }

    public function balakjanm() {
        
        $data["year"] = $this->input->get_post('year');
         $data["month"] = $this->input->get_post('month');
          $data["userid"] = $this->input->get_post('userid');
          $data["user"]=$this->User_model->isgetUser($data["userid"]);
         $data["birthreport"]=$this->User_model-> getBirthReport($data["month"],  $data["year"],$data["userid"]);
         
        $this->load->view('balak_janm',$data);
    }
    public function balakjanmDetails() {
        
        $birthid = $this->input->get_post('birthid');
    
        $data=$this->User_model-> getBirthDetails($birthid);
         
        
        $this->load->view('tpl/modal_balak',$data);
    }
    
    public function arogya_mitara_list() {
        $this->load->view('arogya_mitara_list');
    }

}
