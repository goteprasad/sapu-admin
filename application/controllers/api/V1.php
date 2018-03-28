<?php

class V1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
   
        // Your own constructor code
    }

    public function index() {
        $data = array();
        $this->load->view('webservices/clientindex', $data);
    }

    

    public function login() {
        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        $mobile = $this->input->get_post('mobile');
        $password = $this->input->get_post('password');
        if ($data['key'] == TRUE) {
            $result = $this->user_model->isClientExist($mobile, $password);
            if (count($result) > 0) {
                $status = 'Success';
                $type = 'login';
                $message = 'Login successfully';
                $count = count($result);
            } else {
                $status = 'failed';
                $type = 'login';
                $message = 'client Not exist';
                $count = count($result);
            }
        } else {
            $status = 'failed';
            $type = 'login';
            $message = 'Invalid Api Key';
            $count = 0;
        }
        $data['status'] = $status;
        $data['count'] = $count;
        $data['type'] = $type;
        $data['result'] = $result;
        $data['message'] = $message;
        $this->load->view('webservices/webservice_newclient', $data);
    }

    
   
   public function inserAnswer() 
    {

        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        $mobile = $this->input->get_post('mobile');
        $password = $this->input->get_post('password');

        
        if ($data['key'] == TRUE)
        {
            // $password = random_string('alnum', 8);
                $client = $this->user_model->isClientExist($mobile, $password);
           if (count($client) == 1) 
            {

                    $arrdata = array(
                'question_id' => $this->input->get_post('question_id'),
                'answer_count' => $this->input->get_post('answer_count'),
                'ans_date' => $this->input->get_post('ans_date'),
                'local_servey_id' => $this->input->get_post('local_servey_id'),
                'program_topic' => $this->input->get_post('program_topic'),
                'user_id' => $this->input->get_post('user_id'),
                'village_id' => $this->input->get_post('village_id'),
                'category' => $this->input->get_post('category'),
                'profram_holder' => $this->input->get_post('profram_holder'),
                'current_datetime' => $this->input->get_post('current_datetime'),
                'upload_status' =>  '' ,
            );
            
                $ansid = $this->user_model->addAnswer($arrdata);
                if ($ansid > 0) {
                    $ridedetails = $this->user_model->getAnswer($ansid);
                    $count = count($ridedetails);
                    $status = 'success';
                    $result = $ridedetails;
                    $message = 'ans added successfully';
                } else {
                    $status = 'failed';
                    $message = 'ans Not added';
                }
            }
            else
            {

                $count = 0;
                $status = 'error';
                //        $result = [];
                $message = 'Client not Exists';
            }
            
            $type = 'addNewAns';
        } 
        else 
        {
            $status = $type = 'error';
            $message = 'Invalid key';
        }
        $data['status'] = $status;
        $data['count'] = $count;
        $data['type'] = $type;
        $data['result'] = $result;
        $data['message'] = $message;
        $this->load->view('webservices/webservice_newclient', $data);
    }
 public function addbirth()
    {

        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        $mobile = $this->input->get_post('mobile');
        $password = $this->input->get_post('password');

        
        if ($data['key'] == TRUE)
        {
            // $password = random_string('alnum', 8);
                $client = $this->user_model->isClientExist($mobile, $password);
           if (count($client) == 1) 
           {

                    $arrdata = array(
                'name_of_mother' => $this->input->get_post('name_of_mother'),
                'age' => $this->input->get_post('age'),
                'delivery_count' => $this->input->get_post('delivery_count'),
                'month_of_registration' => $this->input->get_post('month_of_registration'),
                'blood_urine_test' => $this->input->get_post('blood_urine_test'),
                'delivery_date' => $this->input->get_post('delivery_date'),
                'place' => $this->input->get_post('place'),
                'gender' => $this->input->get_post('gender'),
                'birth_weight' => $this->input->get_post('birth_weight'),
                'date_of_period' => $this->input->get_post('date_of_period'),
                'user_id' => $this->input->get_post('user_id'),
                'village_id' => $this->input->get_post('village_id'),
            
            );
            
                $ansid = $this->user_model->addBirth($arrdata);
                if ($ansid > 0) {
                    $ridedetails = $this->user_model->getBirth($ansid);
                    $count = count($ridedetails);
                    $status = 'success';
                    $result = $ridedetails;
                    $message = 'Birth added successfully';
                } else {
                    $status = 'failed';
                    $message = 'Birth Not added';
                }
            }
            else
            {

                $count = 0;
                $status = 'error';
                //        $result = [];
                $message = 'Client not Exists';
            }
            
            $type = 'addNewAns';
        } 
        else 
        {
            $status = $type = 'error';
            $message = 'Invalid key';
        }
        $data['status'] = $status;
        $data['count'] = $count;
        $data['type'] = $type;
        $data['result'] = $result;
        $data['message'] = $message;
        $this->load->view('webservices/webservice_newclient', $data);
    }


}
