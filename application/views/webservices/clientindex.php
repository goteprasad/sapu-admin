<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Onetouch | Web Services</title>
<?php //$this->load->view('adminview/toplinks'); ?>
</head>
<body>
<style>
li {margin-bottom:15px;}

a {
  -moz-animation-duration: 400ms;
  -moz-animation-name: blink;
  -moz-animation-iteration-count: infinite;
  -moz-animation-direction: alternate;
  
  -webkit-animation-duration: 400ms;
  -webkit-animation-name: blink;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-direction: alternate;
  
  animation-duration: 400ms;
  animation-name: blink;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}

@-moz-keyframes blink {
  from {
    opacity: 1;
  }
  
  to {
    opacity: 0;
  }
}

@-webkit-keyframes blink {
  from {
    opacity: 1;
  }
  
  to {
    opacity: 0;
  }
}

@keyframes blink {
  from {
    opacity: 1;
  }
  
  to {
    opacity: 0;
  }
}

</style>
<div class="container">
<legend>List of all Client App Web Services</legend>

<ul>

<li><strong>1. Login</strong>
    <ul>
      <li>http://localhost/api/v1/login?mobile=[mobile]&password=[password]&key=[YOUR API KEY]</li>
<!--http://hatchers.in/sapu/index.php/api/v1/login?mobile=9975294782&password=user@123&format=json-->
     
    </ul>
  </li>
 	    
</ul>


<ul>
<li><strong>2. inserAnswer</strong>
    <ul>
      <li>http://holies-beam.000webhostapp.com/api/v1/inserAnswer?mobile=[client_id]&password=[password]&question_id=[question_id]&answer_count=[answer_count]&ans_date=[ans_date]&local_servey_id=[local_servey_id]&program_topic=[program_topic]&program_topic=[program_topic]&user_id=[user_id]&village_id=[village_id]&category=[category]&profram_holder=[profram_holder]&current_datetime=[current_datetime]&format=json&key=[YOUR API KEY]</li>
<!--http://localhost/sapu/api/v1/inserAnswer?mobile=9975294782&password=user@123&question_id=1&answer_count=12&ans_date=2017-12-28%2000:00:00&local_servey_id=111111&program_topic=&program_topic=&user_id=1&village_id=1&category=E&profram_holder=&current_datetime=2017-12-28%2000:00:00&format=json&key=-->
     
    </ul>
  </li>
 	    
</ul>

<ul>
<li><strong>3. inserAnswer</strong>
    <ul>
      <li>http://hatchers.in/sapu/index.php/api/v1/addbirth?name_of_mother=[name_of_mother]&age=[age]&delivery_count=[delivery_count]&month_of_registration=[1-12]&blood_urine_test=[Y/N]&delivery_date=[2017-12-22]&place=[place]&gender=[M/F]&birth_weight=[birth_weigh]&date_of_period=[2017-12-22]&user_id=[user_id]&village_id=[village_id]&mobile=[mobile]&password=[password]format=[json/xml]&key=[YOUR API KEY]</li>
<!--
http://hatchers.in/sapu/index.php/api/v1/addbirth?name_of_mother=voiajaya&age=25&delivery_count=1&month_of_registration=1&blood_urine_test=Y&delivery_date=2017-12-22&place=abad&gender=M&birth_weight=2&date_of_period=2017-12-22&user_id=1&village_id=1&mobile=9975294782&password=user@123&format=json

-->
     
    </ul>
  </li>
 	    
</ul>

<?php //$this->load->view('adminview/footerlinks'); ?>
</div>
</body>
</html>
