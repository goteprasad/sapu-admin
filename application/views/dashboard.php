<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SAPU Admin</title>
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
                    <div class="row m-b-15">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-4">
                            <h4 class="m-b-0">Surveyor List</h4>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4">
                            <select class="form-control">
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4">
                            <select class="form-control">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
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
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Prasad Gote</td>
                                    <td>9860402800</td>
                                    <td>27-11-1990</td>
                                    <td>gote.prasad@yahoo.in</td>
                                    <td><a href="/index.php/welcome/surveyordetails" class="btn btn-sm btn-primary">View Details</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Prasad Gote</td>
                                    <td>9860402800</td>
                                    <td>27-11-1990</td>
                                    <td>gote.prasad@yahoo.in</td>
                                    <td><a href="/index.php/welcome/surveyordetails" class="btn btn-sm btn-primary">View Details</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Prasad Gote</td>
                                    <td>9860402800</td>
                                    <td>27-11-1990</td>
                                    <td>gote.prasad@yahoo.in</td>
                                    <td><a href="/index.php/welcome/surveyordetails" class="btn btn-sm btn-primary">View Details</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Prasad Gote</td>
                                    <td>9860402800</td>
                                    <td>27-11-1990</td>
                                    <td>gote.prasad@yahoo.in</td>
                                    <td><a href="/index.php/welcome/surveyordetails" class="btn btn-sm btn-primary">View Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('common_js.php');?>
    </body>
</html>
