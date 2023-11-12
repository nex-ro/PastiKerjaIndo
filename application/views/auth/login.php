<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                <a href="<?=site_url('')?>">
                                <img src="<?=base_url('assets')?>/img/exit.png" alt="" style="position: absolute; top:10px;right :20px; width: 50px; opacity: 0.8;">
                            </a>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?= $this->session->flashdata('message');?>
                                    <form action="<?= site_url('auth/Auth') ?>" method="POST">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                                <?= form_error('email','<small class = "text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" value="<?= set_value('pass'); ?>">
                                                <?= form_error('pass','<small class = "text-danger pl-3">','</small>');?>
                                              </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
</button>
                                        <hr>
                                        <button class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?=site_url('auth/Auth/register')?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
