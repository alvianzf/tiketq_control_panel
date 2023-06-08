<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>

<!--inner body start from here-->
<div class="inner-body">
    <div class="login_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                    <div class="login-widget animte-reavel">
                            <div class="sec-img">
                                <h3 style="color: black;">Sign in to your Account</h3>
                            </div>
                        <div class="login-box">

                  <?php echo $this->session->flashdata('message'); ?>
                         <form action="<?php echo base_url('login/auth')?>" method="post">
                       
                                <div class="form-group">
                                  <span><i class="fa fa-user"></i></span>  <input type="text" class="form-control" placeholder="Username" name="username" required="required">
                                </div>
                                <div class="form-group">
                                    <span><i class="fa fa-lock"></i></span>      <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                                </div>
                                <div class="form-actions clearfix">
                                    <div class="remember-me pull-left">
                                        <input type="checkbox"> <span>Remember me?</span>
                                    </div>
                                    <div class="submit-form text-center">
                                      <input type="submit"class="btn submit-btn" value="LOGIN" ><br>
                                        <div class="login-footer">
                                        <a href="../../html/pages/forget-passward.html">
                                            Forget Password?
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="register">
                            <p>Don't have an accoutn yet? <a href="sign_up.html">Sign Up</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer')?>