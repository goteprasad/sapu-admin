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
                            <h4 class="m-b-0">Arogya Mitra List</h4>
                        </div>




                    </div>
                    <div class="table-responsive table-bordered">
                        <table class="table table-striped m-b-0">
                            <thead>
                            <th>Sr. No.</th>
                            <th>Surveyor Name</th>
                            <th>Mobile Number.</th>
                            <th>Birth Date</th>
                            <th>Village Name</th>
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


        // if(selectmonth!=null &&selectyear!=null )
        $.ajax({
            url: "ajax_getServayersList",
            type: "POST",

            dataType: "json",
            success: function (data) {
                // $("#data").text(data.toString());
                $("#tablebody").html("");
                if (data.code == 1)// sucess code =1
                {
                      var i=0;
                    $.each(data.result, function (key, val) {
                        i++;
                        $("#tablebody").append("<tr><td>" + i + "</td><td>" + val.user_name + "</td><td>" + val.mobile + "</td><td>" + val.dob + "</td><td>" + val.village_name + "</td></tr>");

                    })

                } else
                {

                }

            }
        });



    });
</script>