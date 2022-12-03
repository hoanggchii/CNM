<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <!-- Title Content Row-->
    <div class="row">
        <div class="col-12 mb-4 text-center">
            <h2 class="font-weight-bold text-info text-uppercase">Đăng ký lịch khám</h2>
        </div>
    </div>

    <!-- Content Row -->
    <!-- Form Add Document --><i class="fa fa-eye"></i>
    <a href="index.php?act=check-calendar" class="font-weight-bold text-info">Xem lịch khám</a>
    <div class="row">

        <div class="col-lg-12 mb-5 ">
            <div class="card shadow mb-4">

                <form action="#" method="POST" name="validate_form" onsubmit="return validate()">

                    <!-- Ngày đăng ký -->
                    <div class="card-header py-3">
                        <lable for="day" class="m-0 font-weight-bold text-success">Ngày đăng ký</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <input type="date" class="form-control" name="day" id="day" placeholder="Nhập Ngày đăng ký" value="" required>

                            <span class="text-danger" id="tbDay">*</span>
                        </div>
                    </div>

                    <!-- Giờ bắt đầu -->
                    <div class="card-header py-3">
                        <lable for="startTime" class="m-0 font-weight-bold text-success">Giờ bắt đầu</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <input type="time" class="form-control" name="startTime" id="startTime" min="08:00" max="15:00" placeholder="Chọn Giờ bắt đầu" required>

                            <span class="text-danger" id="tbStartTime">*</span>
                        </div>
                    </div>

                    <!-- Giờ kết thúc -->
                    <div class="card-header py-3">
                        <lable for="endTime" class="m-0 font-weight-bold text-success">Giờ kết thúc</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <input type="time" class="form-control" name="endTime" id="endTime" min="09:00" max="17:30" placeholder="Nhập Giờ kết thúc" required>

                            <span class="text-danger" id="tbEndTime">*</span>
                        </div>
                    </div>

                    <!-- Ghi chú -->
                    <div class="card-header py-3">
                        <lable class="m-0 font-weight-bold text-success">Ghi chú</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <textarea class="form-control" name="message" rows="3"></textarea>
                        </div>
                    </div>

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
<script type="text/javascript">
    function validate() {
        // day 
        var day = new Date(document.forms["validate_form"]["day"].value);
        var today = new Date();
        today.setDate(today.getDate());
        if (day < today) {
            $("#tbDay").html("Phải sau ngày hiện tại")
            return false;
        }
        $("#tbDay").html("*")

    }
</script>