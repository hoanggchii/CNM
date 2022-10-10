<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap py-5">
                    <h3 class="text-center mb-0">Welcome</h3>
                    <p class="text-center">Tạo tài khoản mới</p>
                    <form class="login-form" action="index.php?act=register" method="post">
                        <div class="form-group">
                            <br>
                            <input type="text" name="user" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <br>
                            <input type="password" name="pass" class="form-control" placeholder="New password" required>
                        </div>
                        <div class="form-group">
                            <br>
                            <input type="password" name="rpass" class="form-control" placeholder="Confirm" required>
                        </div>
                        <div class="form-group">
                            <br>
                            <input type="text" name="name" class="form-control" placeholder="Full name" required>
                        </div>
                        <div class="form-group">
                            <br>
                            <input type="text" name="sdt" class="form-control" placeholder="Mobile number" required>
                        </div>
                        <div class="form-group">
                            <br>
                            <input type="text" name="email" class="form-control" placeholder="Email address" required>
                        </div>
                        <!-- <div class="form-group d-md-flex">
                            <div class="w-100 text-md-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div> -->
                        <br>
                        <div class="form-group">
                            <!-- <button type="submit" class="btn form-control btn-primary rounded submit px-3"> Login</button> -->
                            <input type="submit" class="btn form-control btn-primary" name="register" value="Sign Up">
                        </div>
                    </form>
                    <div class="w-100 text-center mt-4 text">
                        <p class="mb-0">Do have an account?</p>
                        <a href="index.php?act=login">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>