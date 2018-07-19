<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SAPU Admin | Surveyor Details</title>
        <?php $this->load->view('common_css.php'); ?>
    </head>
    <body>
        <?php $this->load->view('header.php'); ?>
        <div class="container-fluid">
            <div class="row flex-xl-nowrap">
                <div class="col-12 col-md-2 col-xl-2 col-lg-2 bd-sidebar">
                    <?php $this->load->view('sidebar.php'); ?>
                </div>
                <div class="col-xl-10 col-md-10 col-lg-10 bd-content">
                    <div class="row">
                        <div class="col">
                            <h4 class="m-b-15">Surveyor Details</h4>
                            <p class="m-b-0"><strong>Name : </strong><?php echo $user->user_name; ?></p>
                            <p class="m-b-0"><strong>Mobile : </strong><?php echo $user->mobile; ?></p>
                            <p class="m-b-0"><strong>Village : </strong><?php echo $user->village_name; ?></p>
                            <hr>
                            <ul class="surveyor-menu">
                                
                               
        
                                
                                <li><a href="/index.php/welcome/arogyatapasni?year=<?php echo $year;?>&month=<?php echo $month;?>&userid=<?php echo $userid;?>&category=H"><img src="/assets/img/first-aid-kit.png"/><p>आरोग्य तपासनी</p></a></li>
                                <li><a href="/index.php/welcome/arogyatapasni?year=<?php echo $year;?>&month=<?php echo $month;?>&userid=<?php echo $userid;?>&category=E"><img src="/assets/img/team.png"/><p>कार्यक्रम व्यवस्थापन</p></a></li>
                                <li><a href="/index.php/welcome/balakjanm?year=<?php echo $year;?>&month=<?php echo $month;?>&userid=<?php echo $userid;?>&category=H"><img src="/assets/img/mother.png"/><p>बालक जन्म नोंद</p></a></li>
                                <li><a href="/index.php/welcome/arogyatapasni?year=<?php echo $year;?>&month=<?php echo $month;?>&userid=<?php echo $userid;?>&category=F"><img src="/assets/img/doctor.png"/><p>आरोग्य बँक अभिप्राय</p></a></li>
                             
                            </ul> 
                                                        <hr>

                             <ul class="surveyor-menu">
                             
                                <li><a href="/index.php/welcome/arogyatapasni?year=<?php echo $year;?>&month=<?php echo $month;?>&userid=<?php echo $userid;?>&category=G"><img src="/assets/img/first-aid-kit.png"/><p>GLSAK</p></a></li>
                                <li><a href="/index.php/welcome/arogyatapasni?year=<?php echo $year;?>&month=<?php echo $month;?>&userid=<?php echo $userid;?>&category=S"><img src="/assets/img/team.png"/><p>संजीवनी</p></a></li>
                                <li><a href="/index.php/welcome/arogyatapasni?year=<?php echo $year;?>&month=<?php echo $month;?>&userid=<?php echo $userid;?>&category=SG"><img src="/assets/img/mother.png"/><p>SGAK</p></a></li>
                                <li><a href="/index.php/welcome/arogyatapasni?year=<?php echo $year;?>&month=<?php echo $month;?>&userid=<?php echo $userid;?>&category=SR"><img src="/assets/img/doctor.png"/><p>SRAK</p></a></li>

                            </ul>
                                                        <hr>
                                                        <ul class="surveyor-menu">
                             
                                <li><a href="/index.php/welcome/arogyatapasni?year=<?php echo $year;?>&month=<?php echo $month;?>&userid=<?php echo $userid;?>&category=U"><img src="/assets/img/first-aid-kit.png"/><p>उज्ज्वल भारत</p></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('common_js.php'); ?>
    </body>
</html>
