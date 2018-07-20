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
  public function isgetUser($id) {

        $this->db->where('id', $id);
        $query = $this->db->get('user_table');
        $result = $query->row();
        //Free Memory for resource id
        $query->free_result();

        return $result;
    }
    public function addAnswer($insertArray) {
        $data = array(
            'question_id' => '',
            'answer_count' => '',
            'ans_date' => '',
            'local_servey_id' => '',
            'program_topic' => '',
            'user_id' => '',
            'village_id' => '',
            'category' => '',
            'profram_holder' => '',
            'current_datetime' => date('Y-m-d H:i:s'),
            'upload_status' => '',
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

    public function addBirth($insertArray) {
        $data = array(
            'name_of_mother' => '',
            'age' => '',
            'delivery_count' => '',
            'month_of_registration' => '',
            'blood_urine_test' => '',
            'delivery_date' => '',
            'place' => '',
            'gender' => '',
            'birth_weight' => '',
            'date_of_period' => '',
            'user_id' => '',
            'village_id' => '',
        );
        $data = array_merge($data, $insertArray);
        extract($data);
        $data1 = array(
            'name_of_mother' => $name_of_mother,
            'age' => $age,
            'delivery_count' => $delivery_count,
            'month_of_registration' => $month_of_registration,
            'blood_urine_test' => $blood_urine_test,
            'delivery_date' => $delivery_date,
            'place' => $place,
            'gender' => $gender,
            'birth_weight' => $birth_weight,
            'date_of_period' => $date_of_period,
            'user_id' => $user_id,
            'village_id' => $village_id,
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

    public function getYearsList() {

        //SELECT year(ans_date) FROM `answer_table` GROUP BY ans_date

        $query = $this->db->select('year(month_of_registration) year FROM `birth_table` GROUP BY year(month_of_registration) UNION SELECT year(ans_date) year FROM `answer_table` GROUP BY year(ans_date)')->get();
        $result = $query->result();

        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function getMonthsList($year) {

        $query = $this->db->select('month(month_of_registration) month,MONTHNAME(month_of_registration) as name FROM `birth_table` WHERE YEAR(month_of_registration)=' . $year . ' GROUP BY month(month_of_registration) UNION SELECT month(ans_date) month,MONTHNAME(ans_date) as name FROM `answer_table` WHERE YEAR(ans_date)=' . $year . ' GROUP BY month(ans_date)')->get();
        $result = $query->result();
        $query->free_result();
        return $result;
    }

    public function getServayers($month, $year) {
        
        $query;
       if(isset($month)&&isset($year))
       {
           $query = $this->db->select("user_id,user_table.* FROM `answer_table` LEFT JOIN user_table ON(user_id=id) WHERE MONTH(ans_date) = " . $month . " AND YEAR(ans_date) = " . $year . " GROUP BY user_id UNION SELECT user_id,user_table.* FROM `birth_table` LEFT JOIN user_table ON(user_id=id) WHERE MONTH(month_of_registration) = " . $month . " AND YEAR(month_of_registration) = " . $year . " GROUP BY user_id")->get();
        
       }
        else {
           $query=$this->db->select("*")->get("user_table");
       }
        $result = $query->result();
        $query->free_result();
        return $result;
    }
    
     public function getReport($month, $year,$category,$userid) {
         
         $query=" question_table.question_id,question_table.Question_Marathi,question_table.Question_English,answer_table.answer_count,answer_table.ans_date  FROM `question_table` LEFT JOIN (SELECT * FROM answer_table WHERE month(ans_date)=".$month." and year(ans_date)=".$year." AND user_id=".$userid." GROUP BY local_servey_id, `question_id`) as answer_table ON (answer_table.question_id=question_table.question_id) WHERE question_table.Category_English='".$category."'";
        $query = $this->db->select($query)->get();
        $result = $query->result();
//      
        $query->free_result();
        return $result;
    }
    
     public function getBirthReport($month, $year,$userid) {
         
         $query=" * FROM birth_table WHERE birth_table.user_id= ".$userid." AND  month(delivery_date)=".$month." and year(delivery_date)=".$year;
        $query = $this->db->select($query)->get();
        $result = $query->result();
  
        $query->free_result();
        return $result;
    }
      public function getBirthDetails($id) {
         
        $query = $this->db->where("birth_id", intval($id))->get("birth_table");
        $result = $query->row();
  
        $query->free_result();
        return $result;
    }
    
 public function getCategory($category) {
     
     
        $query = $this->db->select("Category_English,Category_Marathi FROM question_table  WHERE Category_English='".$category."' GROUP BY Category_English")->get();
        $result = $query->row();
//        echo  $this->db->last_query();
//        die();
        $query->free_result();
        return $result;
    }
    
    
    //
    //put your code here
}
