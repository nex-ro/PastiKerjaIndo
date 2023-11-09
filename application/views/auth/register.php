<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <a href="<?= site_url('') ?>">
                                <img src="<?= base_url('assets') ?>/img/exit.png" alt=""
                                    style="position: absolute; top:10px;right :20px; width: 50px; opacity: 0.8;">
                            </a>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user"
                                            id="exampleFirstName" placeholder="Full name" value="<?= set_value('name'); ?>">
                                            <span class="form-error"><?= form_error('name'); ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="noHP" class="form-control form-control-user"
                                            id="exampleLastName" placeholder="Phone Number" value="<?= set_value('phone'); ?>">
                                            <span class="form-error"><?= form_error('phone'); ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        id="exampleInputEmail" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                        <span class="form-error"><?= form_error('email'); ?></span>
                                </div>
                                <div class="col-sm-6">
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="pass" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" value="<?= set_value('password'); ?>">
                                            <span class="form-error"><?= form_error('password'); ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="pass2" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" value="<?= set_value('retype_password'); ?>">
                                            <span class="form-error"><?= form_error('retype_password'); ?></span>
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>