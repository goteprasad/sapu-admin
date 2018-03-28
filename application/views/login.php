<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->load->view('common_css.php');?>
    </head>
    <body>
        <section class="login-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-6 col-sm-12 align-self-center">
                        <h1>
                            <img src="/assets/img/appicon.png"/>
                            Sapu Admin
                        </h1>
                        <div class="card">
                            <h5 class="card-header">Login</h5>
                            <div class="card-body">
                                <form id="login-form" role="form" method="post">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" id="mobile" class="form-control" placeholder="Type mobile no." tabindex="1">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="Type password" tabindex="2">
                                    </div>
                                    <a href="/index.php/welcome/dashboard" class="btn btn-success">Login</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $this->load->view('common_js.php');?>
    </body>
</html>
