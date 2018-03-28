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
class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

   
    
    public function isClientExist($mobile, $password) {

        $this->db->where('mobile', $mobile);
       
        $this->db->where('password', $password);
        $query = $this->db->get('user_table');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();

        return $result;
    }

    public function addAnswer($insertArray) 
     {
        $data = array(
           
            'question_id' => '',
                'answer_count' =>'',
                'ans_date' => '',
                'local_servey_id' => '',
                'program_topic' => '',
                'user_id' =>'',
                'village_id' =>'',
                'category' => '',
                'profram_holder' =>'',
                'current_datetime' =>date('Y-m-d H:i:s'),
                'upload_status' =>  '' ,
        );
        $data = array_merge($data, $insertArray);
        extract($data);
        $data1 = array(
            'question_id' => $question_id,
            'answer_count' => $answer_count,
            'ans_date' => $ans_date,
            'local_servey_id' => $local_servey_id,
            'program_topic' => $program_topic,
            'user_id' => $user_id,
            'village_id' => $village_id,
            'category' => $category,
            'profram_holder' => $profram_holder,
            'current_datetime' => $current_datetime,
            'upload_status' => $upload_status,
            
        );
        
    
        $this->db->insert('answer_table', $data1);
        $newid = $this->db->insert_id();
        return $newid;
    }

    public function getAnswer($ansid) {
        $this->db->where('ans_id', $ansid);
        $query = $this->db->get('answer_table');
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
