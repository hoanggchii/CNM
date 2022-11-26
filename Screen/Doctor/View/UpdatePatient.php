<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <!-- Title Content Row-->
    <div class="row">
        <div class="col-12 mb-4 text-center">
            <h2 class="font-weight-bold text-info text-uppercase">Cập nhật thông tin bệnh nhân</h2>
        </div>
    </div>
    <!-- Content Row -->
    <!-- Form Add Document -->
    <div class="row">
        <div class="col-lg-12 mb-5 ">
            <div class="card shadow mb-4">

                <form action="#" method="POST" name="validate_form" onsubmit="return validate()">

                    <!-- Họ tên -->
                    <div class="card-header py-3">
                        <lable for="username" class="m-0 font-weight-bold text-success">Họ tên</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <?php
                            if (isset($result) && $result != 0) { //. $result["HoTen"] .
                                echo '<input type="text" class="form-control" name="username" id="username" placeholder="Nhập họ tên" value="' . $result['HoTen'] . '"required>';
                            }
                            ?>
                            <span class="text-danger" id="tbName">*</span>
                        </div>
                    </div>

                    <!-- Ngày sinh -->
                    <div class="card-header py-3">
                        <lable for="birthday" class="m-0 font-weight-bold text-success">Ngày sinh</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <?php
                            if (isset($result) && $result != 0) {
                                echo '<input type="date" class="form-control" name="birthday" id="birthday" placeholder="Chọn ngày sinh" value="' . $result['NgaySinh'] . '"required>';
                            }
                            ?>
                            <span class="text-danger" id="tbBirthday">*</span>
                        </div>
                    </div>

                    <!-- Số điện thoại -->
                    <div class="card-header py-3">
                        <lable for="phone" class="m-0 font-weight-bold text-success">Số điện thoại</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <?php
                            if (isset($result) && $result != 0) {
                                echo '<input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại" value="' . $result['SDT'] . '"required>';
                            }
                            ?>
                            <span class="text-danger" id="tbPhone">*</span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="card-header py-3">
                        <lable for="email" class="m-0 font-weight-bold text-success">Email</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <?php
                            if (isset($result) && $result != 0) {
                                echo '<input type="email" class="form-control" name="email" id="email" placeholder="Nhập email" value="' . $result['Email'] . '"required>';
                            }
                            ?>
                            <span class="text-danger" id="tbEmail">*</span>
                        </div>
                    </div>

                    <!-- Chứng minh nhân dân -->
                    <div class="card-header py-3">
                        <lable for="identitycard" class="m-0 font-weight-bold text-success">Chứng minh nhân dân</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <?php
                            if (isset($result) && $result != 0) {
                                echo '<input type="text" class="form-control" name="identitycard" id="identitycard" placeholder="Nhập số chứng minh nhân dân" value="' . $result['CMND'] . '"required>';
                            }
                            ?>
                            <span class="text-danger" id="tbIdentitycard">*</span>
                        </div>
                    </div>

                    <!-- Địa chỉ -->
                    <div class="card-header py-3">
                        <label for="address" class="m-0 font-weight-bold text-success">Địa chỉ</label>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <?php
                            if (isset($result) && $result != 0) {
                                echo '<input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ" value="' . $result['DiaChi'] . '"required>';
                            }
                            ?>
                            <span class="text-danger" id="tbAddress">*</span>
                        </div>
                    </div>
                    <!-- Ghi chú -->
                    <!-- <div class="card-header py-3">
                        <lable class="m-0 font-weight-bold text-success">Ghi chú</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <textarea class="form-control" name="message" rows="3"></textarea>
                        </div>
                    </div> -->
                    <!-- Submit -->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-2">
                            <!-- <button type="submit" class="btn btn-primary px-5 px-lg-5">Lưu</button> -->
                            <input type="submit" value="Cập nhật" name="btnUpdate" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
<!-- /.container-fluid -->
<script type="text/javascript">
    function validate() {
        // username
        var username = document.forms["validate_form"]["username"].value;
        var regex_name = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{1,}$/;
        if (!regex_name.test(username)) {
            // alert("Họ tên không hợp le");
            $("#tbName").html("Họ tên chỉ chứa chữ cái in hoa và thường")
            return false;
        }
        $("#tbName").html("*")
        // birthday 
        var birthday = new Date(document.forms["validate_form"]["birthday"].value);
        // var day = new Date(birthday.val());
        var today = new Date();
        if (eval(today.getFullYear()-birthday.getFullYear())<=1) {
            $("#tbBirthday").html("Tuổi phải lớn hơn 1")
            return false;
        }
        $("#tbBirthday").html("*")
        // phone
        var phone = document.forms['validate_form']["phone"].value;
        var regex_phone = /^[0][3|7|9][0-9]{8}$/;
        if (!regex_phone.test(phone)) {
            // alert("Số điện thoại không hợp lệ");
            $("#tbPhone").html("Số điện thoại không hợp lệ")
            return false;
        }
        $("#tbPhone").html("*")
        // email
        var email = document.forms["validate_form"]["email"].value;
        var regex_email = /^[a-zA-Z0-9]{0,50}[@][a-z]{3,7}[.][a-z]{3}$/;
        if (!regex_email.test(email)) {
            $("#tbEmail").html("Email không hợp lệ")
            return false;
        }
        $("#tbEmail").html("*")
        // identity_card
        var identity_card = document.forms["validate_form"]["identitycard"].value;
        var regex_identity_card = /^[0-9]{9}$/;
        if (!regex_identity_card.test(identity_card)) {
            $("#tbIdentitycard").html("Chứng minh nhân dân không hợp lệ")
            return false;
        }
        $("#tbIdentitycard").html("*")
        // address
        var address = document.forms["validate_form"]["address"].value;
        var regex_address = /^[0-9\/]{1,}[0-9A-Za-z.ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]{2,}$/;
        if (!regex_address.test(address)) {
            $("#tbAddress").html("Địa chỉ không hợp lệ")
            return false;
        }
        $("#tbAddress").html("*")
        
    }
</script>