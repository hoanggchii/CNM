<!-- Thông tin cá nhân -->
<?php
    $users = get_user_by_id($_SESSION['id']);
?>
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Thông tin cá nhân</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 d-flex align-items-stretch"></div>
            <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="" method="post" role="form" class="php-email-form">
                    <a style="text-align: center; border: 2px solid #a1a1a1; padding: 5px;  border-radius: 50px 50px 50px 50px;" href="index.php?act=updatePerIf">Cập nhật <ion-icon class="right" name="pencil"></ion-icon></a>
                    <br>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Họ tên: </label>
                            <?php echo '<b>'.$users["HoTen"].'</b>'; ?>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Ngày sinh: </label>
                            <?php echo '<b>'.$users["NgaySinh"].'</b>'; ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Tên đăng nhập: </label>
                            <?php echo '<b>'.$users["TenDangNhap"].'</b>'; ?>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Số điện thoại: </label>
                            <?php echo '<b>'.$users["SDT"].'</b>'; ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Email: </label>
                            <?php echo '<b>'.$users["Email"].'</b>'; ?>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Số chứng minh nhân dân: </label>
                            <?php echo '<b>'.$users["CMND"].'</b>'; ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Địa chỉ: </label>
                            <?php echo '<b>'.$users["DiaChi"].'</b>'; ?>
                        </div>
                    </div>
                    <!-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> -->
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->


<!-- ========================================================================================================================= -->

    <?php
        // $users = get_user_by_id($_SESSION['id']);
        // echo $_SESSION['id'];

        // echo $users["TenDangNhap"];
        
    ?>