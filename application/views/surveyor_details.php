<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SAPU Admin | Surveyor Details</title>
        <?php $this->load->view('common_css.php');?>
    </head>
    <body>
        <?php $this->load->view('header.php');?>
        <div class="container-fluid">
            <div class="row flex-xl-nowrap">
                <div class="col-12 col-md-2 col-xl-2 col-lg-2 bd-sidebar">
                    <?php $this->load->view('sidebar.php');?>
                </div>
                <div class="col-xl-10 col-md-10 col-lg-10 bd-content">
                    <div class="row">
                        <div class="col">
                            <h4 class="m-b-15">Surveyor Details</h4>
                            <p class="m-b-0"><strong>Name : </strong>Prasad Gote</p>
                            <p class="m-b-0"><strong>Mobile : </strong>9860402800</p>
                            <p class="m-b-0"><strong>Email ID : </strong>prasad.gote14321@gmail.com</p>
                            <hr>
                            <ul class="surveyor-menu">
                                <li><a href="/index.php/welcome/arogyatapasni"><img src="/assets/img/first-aid-kit.png"/><p>आरोग्य तपासनी</p></a></li>
                                <li><a href="/index.php/welcome/karyakram"><img src="/assets/img/team.png"/><p>कार्यक्रम व्यवस्थापन</p></a></li>
                                <li><a href="/index.php/welcome/balakjanm"><img src="/assets/img/mother.png"/><p>बालक जन्म नोंद</p></a></li>
                                <li><a href="/index.php/welcome/arogyaabhipray"><img src="/assets/img/doctor.png"/><p>आरोग्य बँक अभिप्राय</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('common_js.php');?>
    </body>
</html>
