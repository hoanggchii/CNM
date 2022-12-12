<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <!-- Title Content Row-->
    <div class="row">
        <div class="col-12 mb-4 text-center">
            <h2 class="font-weight-bold text-info text-uppercase">Tạo phiếu xét nghiệm</h2>
        </div>
    </div>
    <!-- Content Row -->
    <!-- Form Add Document -->
    <div class="row">
        <div class="col-lg-12 mb-5 ">
            <div class="card shadow mb-4">

                <form action="#" method="POST" enctype='multipart/form-data'>

                    <!-- kết quả chẩn đoán -->
                    <div class="card-header py-3 form-group row m-2">
                        <lable for="drugname" class="m-0 font-weight-bold text-success col-sm-6" style="padding-left: 0px;">Chẩn đoán bằng cách chụp CT</lable>
                        <lable for="amount" class="m-0 font-weight-bold text-success col-sm-6">Lưu kết quả</lable>
                        <!-- <lable for="DVT" class="m-0 font-weight-bold text-success col-sm-3" style="padding-left: 20px;">Đơn vị tính</lable> -->
                    </div>
                    <div class="form-group row m-2">
                        
                        <div class="col-sm-6">
                            <select id="DVT" class="form-control" name="DVT">
                                <option value="">---Chọn hình thức chẩn đoán---</option>
                                <option value="Viên">Chụp CT</option>
                                <option value="Chai">Xét nghiệm</option>
                            </select>
                            <span class="text-danger" id="tbDVT">*</span>
                        </div>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name='files[]' multiple />

                            <span class="text-danger" id="tbFile">*</span>
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
