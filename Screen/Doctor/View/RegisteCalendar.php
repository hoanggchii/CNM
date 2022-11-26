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

                <form action="#" method="POST">

                    <!-- Ngày giờ khám -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Ngày giờ khám</h6>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-12">
                            <input type="datetime-local" class="form-control" name="DateTime" id="DateTime"
                                placeholder="Nhập tiêu đề">
                        </div>
                    </div>

                    <!-- Ghi chú -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Ghi chú</h6>
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
    <!-- /.container-fluid -->