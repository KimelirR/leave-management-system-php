<!-- Login Body -->
<main id="login">
    <?php require __DIR__ . "/messages/message.php"; ?>
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image bg-blue"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                <form class="user" action="/signin" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                        <?php if (!empty($_SESSION['errors']['emailErr'])): ?>
                                            <span class="text-danger"><?php echo $_SESSION['errors']['emailErr']; ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                        <?php if (!empty($_SESSION['errors']['passwordErr'])): ?>
                                            <span
                                                class="text-danger"><?php echo $_SESSION['errors']['passwordErr']; ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <input type="submit" name="login_btn" value="Login"
                                        class="btn btn-primary btn-user btn-block" />
                                    <hr>
                                    <a href="#" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="#" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="/forgot/password">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="/register">
                                        Don't have an account? Sign up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>