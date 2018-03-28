<?php
header('Access-Control-Allow-Origin: *');

class Web_api_v1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model_web');
   
        // Your own constructor code
    }

    public function index() {
        $data = array();
        $this->load->view('webservices/webv1', $data);
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
            $result = $this->user_model_web->isUserExist($mobile, $password);
            if (count($result) > 0) {
                $status = 'Success';
                $type = 'login';
                $message = 'Login successfully';
                $count = count($result);
            } else {
                $status = 'failed';
                $type = 'login';
                $message = 'user Not exist';
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



   public function getArogyaMitraList() {
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
           
                 $client = $this->user_model_web->isUserExist($mobile, $password);
           if (count($client) == 1) 
            {
             	$result = $this->user_model_web->getArogyaMitra();
            	if (count($result) > 0) {
                $status = 'Success';
                $type = 'getArogyaMitraList';
                $message = 'Result foud';
                $count = count($result);
            	} else {
                $status = 'failed';
                $type = 'getArogyaMitraList';
                $message = 'No user Found';
                $count = count($result);
           	 
           	 }
           }
           else
           {
           
             $status = 'failed';
                $type = 'getArogyaMitraList';
                $message = 'Authontication Failed';
                $count = 0;
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

    
   
   public function addarogyamitra() 
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
                $client = $this->user_model_web->isUserExist($mobile, $password);
           if (count($client) == 1) 
            {

                    $arrdata = array(
                'village_name' =>$this->input->get_post('village_name'),
                'user_name' => $this->input->get_post('user_name'),
                'vilage_id' => $this->input->get_post('vilage_id'),
                'tq_id' => $this->input->get_post('tq_id'),
                'mobile' =>$this->input->get_post('umobile'),
                'dob' =>$this->input->get_post('dob'),
                'birthday' => $this->input->get_post('birthday'),
                'password' =>$this->input->get_post('upassword'),
            );
            
                $ansid = $this->user_model_web ->addArogyaMitra($arrdata);
                if ($ansid > 0) {
                    $ridedetails = $this->user_model_web ->getArogyaMitrabyid($ansid);
                    $count = count($ridedetails);
                    $status = 'success';
                    $result = $ridedetails;
                    $message = 'arogya mitra added successfully';
                } else {
                    $status = 'failed';
                    $message = 'arogya mitra Not added';
                }
            }
            else
            {

                $count = 0;
                $status = 'error';
                //        $result = [];
                $message = 'autontication failed';
            }
            
            $type = 'add arogya mitra';
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
                $client = $this->user_model_web ->isClientExist($mobile, $password);
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
            
                $ansid = $this->user_model_web->addBirth($arrdata);
                if ($ansid > 0) {
                    $ridedetails = $this->user_model_web ->getBirth($ansid);
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



 public function getVillageList() {
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
            
                 $client = $this->user_model_web->isUserExist($mobile, $password);
           if (count($client) == 1) 
            {
            		$result = $this->user_model_web->getVillages();
            	if (count($result) > 0) {
                $status = 'Success';
                $type = 'getVillageList';
                $message = 'Village Result foud';
                $count = count($result);
            	} else {
                $status = 'failed';
                $type = 'getVillageList';
                $message = 'No Village Found';
                $count = count($result);
           	 
           	 }
           }
           else
           {
           
             $status = 'failed';
                $type = 'getVillageList';
                $message = 'Authontication Failed';
                $count = 0;
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



}
