<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SAPU Admin | Balak Janm</title>
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
                            <div class="pull-left">
                                <h4 class="m-b-15">बालक जन्म नोंद</h4>
                            </div>
                            <div class="pull-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/index.php/welcome/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/index.php/welcome/surveyordetails">Surveyor Details</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">बालक जन्म नोंद</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="clearfix"></div>
                            <p class="m-b-0"><strong>Name : </strong>Prasad Gote</p>
                            <p class="m-b-0"><strong>Mobile : </strong>9860402800</p>
                            <p class="m-b-0"><strong>Email ID : </strong>prasad.gote14321@gmail.com</p>
                            <hr>
                            <h4 class="m-b-15">Question and answers</h4>
                            <div class="table-responsive table-bordered">
                                <table class="table table-striped m-b-0">
                                    <thead>
                                    <th>Sr.No.</th>
                                    <th>गरोदर मातेचे नाव</th>
                                    <th>बाळंतपणाची तारीख</th>
                                    <th>ठिकाण</th>
                                    <th>मातेचे वय</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Abc Xyz</td>
                                            <td>28-03-2018</td>
                                            <td>Aurangabad</td>
                                            <td>27 Yrs</td>
                                            <td><a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalbalak">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Abc Xyz</td>
                                            <td>28-03-2018</td>
                                            <td>Aurangabad</td>
                                            <td>27 Yrs</td>
                                            <td><a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalbalak">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Abc Xyz</td>
                                            <td>28-03-2018</td>
                                            <td>Aurangabad</td>
                                            <td>27 Yrs</td>
                                            <td><a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalbalak">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Abc Xyz</td>
                                            <td>28-03-2018</td>
                                            <td>Aurangabad</td>
                                            <td>27 Yrs</td>
                                            <td><a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalbalak">View Details</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('tpl/modal_balak.php');?>
        <?php $this->load->view('common_js.php');?>
    </body>
</html>
