<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SAPU Admin | <?php echo $category_data->Category_Marathi; ?></title>
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
                            <div class="pull-left">
                                <h4 class="m-b-15"><?php echo $category_data->Category_Marathi; ?></h4> 
                            </div>
                            <div class="pull-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/index.php/welcome/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/index.php/welcome/surveyordetails?month=<?php echo $month; ?>4&year=<?php echo $year; ?>&userid=<?php echo $userid; ?>">Surveyor Details</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $category_data->Category_Marathi; ?></li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="clearfix"></div>
                            <p class="m-b-0"><strong>Name : </strong><?php echo $user->user_name; ?></p>
                            <p class="m-b-0"><strong>Mobile : </strong><?php echo $user->mobile; ?></p>
                            <p class="m-b-0"><strong>Village : </strong><?php echo $user->village_name; ?></p>
                            <hr>
                            <h4 class="m-b-15">Question and answers</h4>
                            <div class="table-responsive table-bordered">
                                <table class="table table-striped m-b-0">
                                    <thead>
                                    <th>Sr.No.</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Date</th>
                                    </thead>
                                    <tbody>
                                    <?php $var=0;foreach ($report as $key => $value): $var++; ?>
                                        <tr>
                                        <td><?php echo $var; ?></td>
                                        <td><?php echo $value->Question_English; ?></td>
                                        <td><?php echo isset($value->answer_count)?$value->answer_count:"NA"; ?></td>
                                        <td><?php echo isset($value->ans_date)?$value->ans_date:"NA"; ?></td>
                                        <tr>
                                        
                                    <?php  endforeach; ?>
                                    <tr>
                                        
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('common_js.php'); ?>
    </body>
</html>
