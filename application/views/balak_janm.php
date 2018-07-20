<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SAPU Admin | Balak Janm</title>
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
                            <p class="m-b-0"><strong>Name : </strong><?php echo $user->user_name; ?></p>
                            <p class="m-b-0"><strong>Mobile : </strong><?php echo $user->mobile; ?></p>
                            <p class="m-b-0"><strong>Village : </strong><?php echo $user->village_name; ?></p>
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


                                        <?php $var = 0;
                                        foreach ($birthreport as $key => $value): $var++;
                                            ?>
                                            <tr>
                                                <td><?php echo $var; ?></td>
                                                <td><?php echo $value->name_of_mother; ?></td>
                                                <td><?php echo $value->month_of_registration; ?></td>
                                                <td><?php echo $value->place; ?></td>
                                                <td><?php echo $value->age; ?></td>
                                                <td><a href="#" onclick="getDetails(<?php echo $value->birth_id; ?>);return false;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalbalak">View Details</a></td>
                                            </tr>


<?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalbalak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">बालक जन्म नोंद</h5>
                        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id ="modeldata" class="modal-body">
                        
                    </div>
                </div>
            </div>
        </div>


<?php $this->load->view('common_js.php'); ?>




    </body>
</html>
<script>

    function getDetails(birthid)
    {
        $.ajax({
            url: "balakjanmDetails?birthid=" + birthid,
            type: "GET",
            success: function (data) {
                $("#modeldata").html(data);

            }
        });
    }

</script>