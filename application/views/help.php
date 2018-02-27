
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                    <div class="vertical-tab row">
                        <div> <a href="javascript:;" id="toggle-help-sidebar-fixed"><i class="fa fa-info"></i></a>
                            <div class="help-sidebar-fixed">
                                <ul class="nav nav-tabs" role="tablist">
                                    <?php foreach ($policy_terms as $key => $terms): ?>
                                        <li role="presentation" class="<?php echo $key == 0 ? 'active': ''; ?>">
                                            <a href="help.html#tab<?php echo $terms['id']?>" aria-controls="tab<?php echo $terms['id']?>" role="tab" data-toggle="tab">
                                                <i class="fa fa-user" aria-hidden="true"></i> 
                                                <?php echo $terms['tab_name'];?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="help-sidebar-content">
                                <div class="tab-content">
                                    <?php foreach ($policy_terms as $key1 => $terms1):?>
                                        <div role="tabpanel" class="tab-pane <?php echo $key1 == 0? 'active': ''; ?>" id="tab<?php echo $terms1['id']?>">
                                            <div class="text-center">
                                                <h1><?php echo $terms1['description']; ?></h1>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="overlay" class="overlay"></div>
    <div class="modal fade" id="registerModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
                    <h4 class="modal-title"
                        id="myModalLabel"> Login/Registration </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Login">
                                    <form role="form"  method="POST" action="<?php echo base_url().'home/login'?>" id="login_form">
                                        <fieldset>
                                            <h2>Please Sign In</h2>
                                            <hr class="colorgraph">
                                            <div class="form-group"><input type="email" name="login_email" id="email" class="form-control input-lg" placeholder="Email Address" required></div>
                                            <div class="form-group"><input type="password" name="login_password" id="password" class="form-control input-lg" placeholder="Password" required></div><span class="button-checkbox"><button type="button" class="btn" data-color="info">Remember Me</button><input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden"><a href="index.html#forgot" data-toggle="tab" class="btn btn-link pull-right">Forgot Password?</a> </span>
                                        <hr
                                            class="colorgraph">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6"><input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In"></div>
                                                <div
                                                    class="col-xs-6 col-sm-6 col-md-6"> <a href="index.html#Registration" data-toggle="tab" class="btn btn-lg btn-primary btn-block">Register</a>                                            </div>
                                    </div>
                                    </fieldset>
                                </form>
                            </div>
                        <div class="tab-pane" id="Registration">
                            <form role="form" method="POST" id="signup_form" action="<?php echo site_url().'home/register'?>" name="help_signup">
                                <h2>Please Sign Up <small>It's free and always will be.</small></h2>
                                <hr class="colorgraph">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group"><input name="up_first_name" id="first_name" class="form-control input-lg" placeholder="First Name"
                                                tabindex="1" type="text" required></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group"><input name="up_last_name" id="last_name" class="form-control input-lg" placeholder="Last Name"
                                                tabindex="2" type="text" required></div>
                                    </div>
                                </div>
                                <div class="form-group"><input name="up_display_name" id="display_name" class="form-control input-lg" placeholder="Display Name"
                                        tabindex="3" type="text" required></div>
                                <div class="form-group"><input name="up_email" id="email" class="form-control input-lg" placeholder="Email Address"
                                        tabindex="4" type="email" required></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group"><input name="up_password" id="password" class="form-control input-lg" placeholder="Password"
                                                tabindex="5" type="password" required></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group"><input name="up_confirmpass" id="password_confirmation" class="form-control input-lg"
                                                placeholder="Confirm Password" tabindex="6" type="password" required></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-3 col-md-3"> <span class="button-checkbox"><button type="button" class="btn btn-default" data-color="info" tabindex="7"><i class="state-icon glyphicon glyphicon-unchecked"></i>I Agree</button><input name="t_and_c" id="t_and_c" class="hidden" value="1" type="checkbox"></span>                                        </div>
                                    <div class="col-xs-8 col-sm-9 col-md-9"> By clicking <strong class="label label-primary">Register</strong>, you agree to the
                                        <a
                                            href="index.html#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use. </div>
                                </div>
                                <hr class="colorgraph">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6"><input value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7" type="submit"></div>
                                    <div
                                        class="col-xs-12 col-md-6"><a href="index.html#Login" data-toggle="tab" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                        </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="forgot">
                        <form role="form" class="signup_form">
                            <h2>Reset password<small></small></h2>
                            <p>Enter your email address we will sent you the password reset link.</p>
                            <hr class="colorgraph">
                            <div class="form-group"><input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email address"
                                    tabindex="4"></div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12"><a href="index.html#" class="btn btn-success btn-block btn-lg">Reset</a></div>
                            </div>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-12 col-md-6"><a href="index.html#Registration" data-toggle="tab" class="btn btn-lg btn-primary btn-block">Back to Register</a></div>
                                <div
                                    class="col-xs-12 col-md-6"><a href="index.html#Login" data-toggle="tab" class="btn btn-success btn-block btn-lg">Back to Sign In</a></div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="modal fade" id="langmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4
                        class="modal-title" id="myModalLabel">Select your Favorite Language</h4>
                </div>
                <div class="modal-body text-center">
                    <a href="help.html#" class="flags activeflag">
                        <div class="flag-icon flag-icon-us flag-big"></div><br>English<span><i class="fa fa-fw fa-check-circle"></i></span></a>
                    <a href="help.html#" class="flags">
                        <div class="flag-icon flag-icon-in flag-big"></div><br>Hindi<span><i class="fa fa-fw fa-check-circle"></i></span></a>
                    <a href="help.html#" class="flags">
                        <div class="flag-icon flag-icon-ch flag-big"></div><br>China<span><i class="fa fa-fw fa-check-circle"></i></span></a>
                    <a href="help.html#" class="flags">
                        <div class="flag-icon flag-icon-af flag-big"></div><br>Afria<span><i class="fa fa-fw fa-check-circle"></i></span></a>
                </div>
            </div>
        </div>
    </div>