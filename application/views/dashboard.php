<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SAPU Admin</title>
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
                    <div class="row m-b-15">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-4">
                            <h4 class="m-b-0">Surveyor List</h4>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4">
                            <select id="selectyear" class="form-control">
                                <option >Select Year</option>
                                <?php foreach ($years as $key => $value): ?>
                                
                                <?php if ($value->year!=null) : ?>
                                    <option value="<?php echo $value->year; ?>"><?php echo $value->year; ?></option>
                        <?php endif; ?>            
                      <?php endforeach; ?>
                            </select>

                        </div>
                       
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4">
                                    <select id="selectmonth" class="form-control">

                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive table-bordered">
                                <table class="table table-striped m-b-0">
                                    <thead>
                                    <th>Sr. No.</th>
                                    <th>Surveyor Name</th>
                                    <th>Mobile No.</th>
                                    <th>DOB</th>
                                    <th>Email ID</th>
                                    <th>View Details</th>
                                    </thead>
                                    <tbody id="tablebody">
                                       
                                       
                                    </tbody >
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <?php $this->load->view('common_js.php'); ?>


                </body>
                </html>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#selectyear").change(function () {
                            var selectyear = this.value;
                            $("#tablebody").html("");
                            $("#selectmonth").html("<option >Select Month</option>")
                            $.ajax({
                                url: "ajax_getMonthsList",
                                type: "POST",
                                data: {
                                    year: selectyear
                                },
                                dataType: "json",
                                success: function (data) {
                                    // $("#data").text(data.toString());
                                    $("#selectmonth").html("<option >Select Month</option>")

                                    $.each(data.result, function (key, val) {
                                        $("#selectmonth").append("<option value=" + val.month + ">" + val.name + "</option>");
                                       
                                    })



                                }
                            });



                        });
                        $("#selectmonth").change(function () {

                            var selectmonth = this.value;
                            var selectyear = $("#selectyear").find(":selected").text();

                           // if(selectmonth!=null &&selectyear!=null )
                            $.ajax({
                                url: "ajax_getServayersList",
                                type: "POST",
                                data: {
                                    year: selectyear,
                                    month: selectmonth
                                },
                                dataType: "json",
                                success: function (data) {
                                    // $("#data").text(data.toString());
                                    $("#tablebody").html("");
                                    if (data.code == 1)// sucess code =1
                                    {
                                          
                                        $.each(data.result, function (key, val) {
                                            $("#tablebody").append("<tr><td>"+val.user_id+"</td><td>"+val.user_name+"</td><td>"+val.mobile+"</td><td>"+val.dob+"</td><td>"+val.village_name+"</td><td><a href=\"/index.php/welcome/surveyordetails?month="+selectmonth+"&year="+selectyear+"&userid="+val.user_id+"\" class=\"btn btn-sm btn-primary\">View Details</a></td></tr>");
                                             
                                            
                                            
                                           
                                        })

                                    } else
                                    {

                                    }

//                                   



                                }
                            });


                        });
                    });
                </script>