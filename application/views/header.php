<header>
    <?php
    $name;
    if ($this->session->has_userdata('user')) {
        $name = $this->session->user;
    } else {
        redirect(base_url(), 'refresh');
    }


   
    
    ?>
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="#">SAPU ADMIN </a> 
        <form class="form-inline my-2 my-lg-0 pull-right col-xl-3 col-md-3 col-lg-3 col-sm-3 justify-content-end">
            <div class="dropleft profile-dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> Welcome 
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="row col m-l-0 m-r-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 p-l-0 p-r-0">
                            <img src="/assets/img/default-user-photo.png" class="rounded-circle w-100"/>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 profile-info align-self-center">
                            <p><?php echo $name[0]->user_name;  ?></p>
                            <p><?php echo $name[0]->mobile;  ?></p>
<!--                            <p></p>-->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </nav>
</header>

