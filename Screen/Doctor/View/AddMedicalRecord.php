<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <!-- Title Content Row-->
    <div class="row">
        <div class="col-12 mb-4 text-center">
            <h2 class="font-weight-bold text-info text-uppercase">Thêm bệnh án</h2>
        </div>
    </div>
    <!-- Content Row -->
    <!-- Form Add Document -->
    <div class="row">
        <div class="col-lg-12 mb-5 ">
            <div class="card shadow mb-4">

                <form action="#" method="POST">

                    <!-- kết quả chẩn đoán -->
                    <div class="card-header py-3">
                        <lable for="result" class="m-0 font-weight-bold text-success">Kết quả chẩn đoán</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                        <input type="text" class="form-control" name="result" id="result" placeholder="Nhập kết quả chẩn đoán" value="" required>
                    
                            <span class="text-danger" id="tbResult">*</span>
                        </div>
                    </div>

                    <!-- kết luận bệnh -->
                    <div class="card-header py-3">
                        <lable for="conclusions" class="m-0 font-weight-bold text-success">Kết luận bệnh</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="conclusions" id="conclusions" placeholder="Nhập kết luận bệnh" required>
                           
                            <span class="text-danger" id="tbConclusions">*</span>
                        </div>
                    </div>

                    <!-- lưu ý từ bác sĩ -->
                    <div class="card-header py-3">
                        <lable for="note" class="m-0 font-weight-bold text-success">Lưu ý từ bác sĩ</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                           <input type="text" class="form-control" name="note" id="note" placeholder="Nhập lưu ý từ bác sĩ" required>
                            
                            <span class="text-danger" id="tbNote">*</span>
                        </div>
                    </div>
                    <!-- Mã tài khoản -->
                    <!-- <div class="card-header py-3">
                        <lable for="id-user" class="m-0 font-weight-bold text-success">Mã tài khoản</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                           <input type="text" class="form-control" name="id-user" id="id-user" value="<?php ?>" readonly>
                        </div>
                    </div> -->
                    <!-- Submit -->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-2">
                            <!-- <button type="submit" class="btn btn-primary px-5 px-lg-5">Lưu</button> -->
                            <input type="submit" value="Cập nhật" name="btnAdd" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
<!-- /.container-fluid -->
<!-- <script type="text/javascript">
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
</script> -->