<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Cập nhật thông tin cá nhân</h2>
        </div>

        <div class="row">

            <div class="col-lg-3 d-flex align-items-stretch"></div>

            <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="" method="POST" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Họ và tên</label>
                            <input type="text" name="name" class="form-control"  value="<?php echo $HoTen?>"
                                required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="date">Ngày sinh</label>
                            <input type="date" class="form-control" name="date" value="<?php echo $NgaySinh?>"
                                required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="usename">Tên đăng nhập</label>
                            <input type="text" name="usename" class="form-control"  value="<?php echo $TenDN?>"
                                readonly>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="tel">Số điện thoại</label>
                            <input type="text" class="form-control" name="tel"  value="<?php echo $SDT?>"
                                required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $Mail?>"
                                required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="cmnd">Số chứng minh nhân dân</label>
                            <input type="text" class="form-control" name="cmnd"  value="<?php echo $CMND?>"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $DiaChi?>"
                            required>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Cập nhật" name="btnUpdate" class="btn btn-success">
                    </div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->