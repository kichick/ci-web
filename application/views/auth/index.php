<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                    <form class="md-float-material form-material" action="<?= base_url('auth'); ?>" method="post">
                        <div class=" auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Login</h3>
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email Address" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<span class="text-danger">', '</span>'); ?>
                                    <span class="form-bar"></span>

                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <?= form_error('password', '<span class="text-danger">', '</span>'); ?>

                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">

                                        <div class="forgot-phone text-right f-right">
                                            <a href="auth-reset-password.htm" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-dark btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Don't have an account ?</p>
                                        <p class="text-inverse text-left"><a href="<?= base_url('Auth/register'); ?>"><b class="f-w-600">Register Here !</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="text-inverse text-left"><a href="<?= base_url('Home'); ?>"><b class="f-w-600">Back</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>