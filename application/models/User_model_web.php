<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client_Model
 *
 * @author Geneka Technologies2
 */
class User_model_web extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

   
    
    public function isUserExist($mobile, $password) {

        $this->db->where('mobile', $mobile);
        $this->db->where('password', $password);
        $query = $this->db->get('sapu_web_user');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function addArogyaMitra($insertArray) 
     {
        $data = array(
           
          
                'village_name' =>'',
                'user_name' => '',
                'vilage_id' => '',
                'tq_id' => '',
                'mobile' =>'',
                'dob' =>'',
                'birthday' => '',
                'password' =>'',
              
        );
        $data = array_merge($data, $insertArray);
        extract($data);
        $data1 = array(
          
                'village_name' =>$village_name,
                'user_name' => $user_name,
                'vilage_id' => $vilage_id,
                'tq_id' => $tq_id,
                'mobile' =>$mobile,
                'dob' =>$dob,
                'birthday' => $birthday,
                'password' =>$password,
            
        );
        
    
        $this->db->insert('user_table', $data1);
        $newid = $this->db->insert_id();
        return $newid;
    }

    public function getArogyaMitra() {
      
        $query = $this->db->get('user_table');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }
    
     public function getVillages() {
      
      	$this->db->select('village_name, vilage_id, tq_id');
      	$this->db->group_by('vilage_id'); 
        $query = $this->db->get('user_table');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }
    
    public function getArogyaMitrabyid($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('user_table');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }
    
    public function addBirth($insertArray) 
     {
        $data = array(
           
            
           'name_of_mother' => '',
                'age' => '',
                'delivery_count' => '',
                'month_of_registration' => '',
                'blood_urine_test' =>'',
                'delivery_date' => '',
                'place' => '',
                'gender' => '',
                'birth_weight' => '',
                'date_of_period' =>'',
                'user_id' => '',
                'village_id' =>'',
        );
        $data = array_merge($data, $insertArray);
        extract($data);
        $data1 = array(
             'name_of_mother' => $name_of_mother,
                'age' => $age,
                'delivery_count' =>$delivery_count ,
                'month_of_registration' => $month_of_registration,
                'blood_urine_test' =>$blood_urine_test,
                'delivery_date' => $delivery_date,
                'place' => $place,
                'gender' => $gender,
                'birth_weight' => $birth_weight,
                'date_of_period' =>$date_of_period,
                'user_id' =>$user_id,
                'village_id' =>$village_id,
            
        );
        
    
        $this->db->insert('birth_table', $data1);
        $newid = $this->db->insert_id();
        return $newid;
    }

    public function getBirth($birth_id) {
        $this->db->where('birth_id', $birth_id);
        $query = $this->db->get('birth_table');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }



    //put your code here
}
