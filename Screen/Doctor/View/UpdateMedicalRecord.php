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

                    <!-- kết quả chẩn đoán -->
                    <div class="card-header py-3">
                        <lable for="result" class="m-0 font-weight-bold text-success">Kết quả chẩn đoán</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <?php
                            if (isset($re) && $re != 0) {
                                echo ' <input type="text" class="form-control" name="result" id="result" placeholder="Nhập kết quả chẩn đoán" value="' . $re['ChanDoan'] . '" required>';
                            }
                            ?>
                            <span class="text-danger" id="tbResult">*</span>
                        </div>
                    </div>

                    <!-- kết luận bệnh -->
                    <div class="card-header py-3">
                        <lable for="conclusions" class="m-0 font-weight-bold text-success">Kết luận bệnh</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <?php
                            if (isset($re) && $re != 0) {
                                echo '<input type="text" class="form-control" name="conclusions" id="conclusions" placeholder="Nhập kết luận bệnh" value="' . $re['KetLuan'] . '" required>';
                            }
                            ?>
                            <span class="text-danger" id="tbConclusions">*</span>
                        </div>
                    </div>

                    <!-- lưu ý từ bác sĩ -->
                    <div class="card-header py-3">
                        <lable for="note" class="m-0 font-weight-bold text-success">Lưu ý từ bác sĩ</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <?php
                            if (isset($re) && $re != 0) {
                                echo '<input type="text" class="form-control" name="note" id="note" placeholder="Nhập lưu ý từ bác sĩ" value="' . $re['LuuY'] . '" required>';
                            }
                            ?>
                            <span class="text-danger" id="tbNote">*</span>
                        </div>
                    </div>
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