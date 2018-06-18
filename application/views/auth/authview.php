
<body>
    <div class="lowin">
        <div class="lowin-brand">
            <img style="height: 100px; width: 150px;" src="<?=base_url('assets/img/pnplogo.png')?>" alt="logo">
        </div>
        <div class="lowin-wrapper">
            <div class="lowin-box lowin-login">
                <div class="lowin-box-inner">
                    <form class="form form-signin" method="post">
                        <?php if(!empty(@$notif)){ ?>
                        <div id="login-alert" class="alert alert-<?= @$notif['type'];?> alert-dismissible fade show col-sm-12" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>                            
                              <?= @$notif['message'];?>
                        </div>
                        <?php } ?>            
                        <span>Sign in to continue</span>
                        <div class="lowin-group">
                            <label>Email <a class="login-back-link">Sign in?</a></label>
                            <input type="email" autocomplete="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="lowin-group password-group">
                            <label>Password <a class="forgot-link">Forgot Password?</a></label>
                            <input type="password" name="password" id="password" autocomplete="current-password" placeholder="Password" class="form-control">
                        </div>
                        <button class="lowin-btn login-btn" type="submit">
                            Sign In
                        </button>

                        <div class="text-foot">
                            Don't have an account? <a href="" class="register-link">Register</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="lowin-box lowin-register">
                <div class="lowin-box-inner">
                    <form class="form form-register">
                        <div id="register-alert"></div>                        
                        <span>Let's create your account!</span>
<!--                         <div class="lowin-group">
                            <label>Firstname</label>
                            <input type="text" name="firstname" autocomplete="firstname" class="form-control" placeholder="Name">
                        </div>
                        <div class="lowin-group">
                            <label>Middlename</label>
                            <input type="text" name="middlename" autocomplete="middlename" class="form-control" placeholder="Name">
                        </div>
                        <div class="lowin-group">
                            <label>Lastname</label>
                            <input type="text" name="lastname" autocomplete="lastname" class="form-control" placeholder="Name">
                        </div>   -->
                        <div class="lowin-group">
                            <label>Username</label>
                            <input type="text" autocomplete="username" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="lowin-group">
                            <label>Email</label>
                            <input type="email" autocomplete="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="lowin-group">
                            <label>Password</label>
                            <input type="password" name="password" autocomplete="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="lowin-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmpass" autocomplete="confirmpass" placeholder="Confirm Password" class="form-control">
                        </div>
                        <button class="lowin-btn register-btn" type="button">
                            Sign Up
                        </button>

                        <div class="text-foot">
                            Already have an account? <a href="" class="login-link">Login</a>
                        </div>
                    </form>
                </div>
             </div>
        </div>




