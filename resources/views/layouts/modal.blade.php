 <div class="modal fade myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>

                <div class="modal-body">
                    <div class="login-register">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="login-tab"><a href="#Login" data-toggle="tab">
                                {{ __('Login') }}
                            </a></li>
                          <!--   <li class="register-tab"><a href="#register" data-toggle="tab">Register</a></li> -->
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane login-tab" id="Login">
                               @include('layouts.form')
                                <!--form-->

                                <div class="or text-center"></div>
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
                                        <button type="submit" class="btn btn-sucess btn-lg">Register</button>
                                    </div>
                                </form>
                                <!--form-->

                                <div class="or text-center"></div>
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
