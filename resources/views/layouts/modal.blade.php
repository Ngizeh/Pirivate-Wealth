 <div class="modal fade myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>

                <div class="modal-body">
                    <div class="login-register">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="login-tab"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li class="register-tab"><a href="#register" data-toggle="tab">Register</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane login-tab" id="Login">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text">
                                    </div>
                                    <!--user name-->

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password">
                                    </div>
                                    <!--password-->

                                    <div class="button-wrap">
                                       <a href="/login" class="btn btn-sucess btn-lg" value="Login">Login</a>
                                        <a href="#" class="btn btn-link btn-lg forget-btn"> Forgot Password</a>
                                    </div>
                                </form>
                                <!--form-->

                                <div class="or text-center"><strong>OR</strong></div>

                                <ul class="modal-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> facebook</a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> twitter</a></li>
                                </ul>

                                <div class="note text-center">
                                    <small>
                                        Don’t have an account yet? <a href="#" class="btn-signup">Signup Now!</a>
                                    </small>
                                </div>
                            </div>
                            <!--login-->

                            <div class="tab-pane register-tab" id="register">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Name <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <!--name-->

                                    <div class="form-group">
                                        <label>Email <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <!--email-->

                                    <div class="form-group">
                                        <label>Password <span>*</span></label>
                                        <input type="password">
                                    </div>
                                    <!--password-->

                                    <div class="form-group">
                                        <label>Re-Enter Password <span>*</span></label>
                                        <input type="password">
                                    </div>
                                    <!-- re password-->

                                    <div class="button-wrap">
                                        <input type="submit" class="btn btn-sucess btn-lg" value="Login">
                                    </div>
                                </form>
                                <!--form-->

                                <div class="or text-center"><strong>OR</strong></div>

                                <ul class="modal-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> facebook</a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> twitter</a></li>
                                </ul>

                                <div class="note text-center">
                                    <small>
                                        Have an account yet? <a href="#">Login Now!</a>
                                    </small>
                                </div>
                            </div>
                            <!--register-->
                        </div>
                    </div>
                    <!--login register-->

                    <div class="recover hide">
                        <div class="tab-content">
                            <h6 class="mb-20">Recover Password?</h6>
                            <form action="#">
                                <div class="form-group">
                                    <label>Username/Email</label>
                                    <input type="text">
                                </div>
                                <!--email-->

                                <input type="submit" class="btn btn-sucess btn-lg" value="Recover Password">
                            </form>
                        </div>
                    </div>
                    <!--login register-->
                </div>
            </div>
        </div>
    </div>
