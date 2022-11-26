<div class="container">
    <form class="login-form" action="index.php?act=addUser" method="post">
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
        <div class="form-group">
            <br>
            <select name="role" class="form-control" id="role">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <br>
        <div class="form-group row justify-content-center">
            <!-- <button type="submit" class="btn form-control btn-primary rounded submit px-3"> Login</button> -->
            <input type="submit" value="Thêm" name="btnAddUser" class="btn btn-success">
            <!-- <input type="submit" class="btn form-control btn-success" name="register" value="Sign Up"> -->
        </div>
    </form>
</div>