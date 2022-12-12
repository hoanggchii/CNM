<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <!-- Title Content Row-->
    <div class="row">
        <div class="col-12 mb-4 text-center">
            <h2 class="font-weight-bold text-info text-uppercase">Tạo đơn thuốc</h2>
        </div>
    </div>
    <!-- Content Row -->
    <!-- Form Add Document -->
    <div class="row">
        <div class="col-lg-12 mb-5 ">
            <div class="card shadow mb-4">

                <form action="#" method="POST">

                    <!-- kết quả chẩn đoán -->
                    <div class="card-header py-3 form-group row m-2">
                        <lable for="drugname" class="m-0 font-weight-bold text-success col-sm-6" style="padding-left: 0px;">Tên thuốc</lable>
                        <lable for="amount" class="m-0 font-weight-bold text-success col-sm-3">Số lượng</lable>
                        <lable for="DVT" class="m-0 font-weight-bold text-success col-sm-3" style="padding-left: 20px;">Đơn vị tính</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="drugname" id="drugname" placeholder="Nhập tên thuốc" value="" required>

                            <span class="text-danger" id="tbDrugName">*</span>
                        </div>

                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Nhập số lượng" value="" required>

                            <span class="text-danger" id="tbAmount">*</span>
                        </div>
                        <div class="col-sm-3">
                            <select id="DVT" class="form-control" name="DVT">
                                <option value="Viên">Viên</option>
                                <option value="Chai">Chai</option>
                                <option value="Gói">Gói</option>
                            </select>
                            <span class="text-danger" id="tbDVT">*</span>
                        </div>
                    </div>
                    <!-- Thời gian uống -->
                    <div class="card-header py-3">
                        <lable for="thoigian" class="m-0 font-weight-bold text-success">Thời gian uống</lable>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-2">
                            <label for="sang">Sáng</label>
                        </div>
                        <div class="col-sm-2">
                            <label for="soluongs">Số lượng</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="soluongs" id="soluongs" placeholder="Nhập số lượng" value="">

                            <span class="text-danger" id="tbSoluongs"></span>
                        </div>
                        <div class="col-sm-2">
                            <select id="donvi" class="form-control" name="donvi">
                                <option value="">Chọn đvt</option>
                                <option value="Viên">Viên</option>
                                <option value="Chai">Chai</option>
                                <option value="Gói">Gói</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-2">
                            <label for="trua">Trưa</label>
                        </div>
                        <div class="col-sm-2">
                            <label for="soluongtr">Số lượng</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="soluongtr" id="soluongtr" placeholder="Nhập số lượng" value="">

                            <span class="text-danger" id="tbSoluongtr"></span>
                        </div>
                        <div class="col-sm-2">
                            <select id="loai" class="form-control" name="loai">
                                <option value="">Chọn đvt</option>
                                <option value="Viên">Viên</option>
                                <option value="Chai">Chai</option>
                                <option value="Gói">Gói</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row m-2">
                        <div class="col-sm-2">
                            <label for="toi">Tối</label>
                        </div>
                        <div class="col-sm-2">
                            <label for="soluongt">Số lượng</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="soluongt" id="soluongt" placeholder="Nhập số lượng" value="">

                            <span class="text-danger" id="tbSoluongt"></span>
                        </div>
                        <div class="col-sm-2">
                            <select id="dang" class="form-control" name="dang">
                                <option value="">Chọn đvt</option>
                                <option value="Viên">Viên</option>
                                <option value="Chai">Chai</option>
                                <option value="Gói">Gói</option>
                            </select>
                        </div>
                    </div>
                    <!-- Submit -->
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-2">
                            <!-- <button type="submit" class="btn btn-primary px-5 px-lg-5">Lưu</button> -->
                            <input type="submit" value="Thêm" name="btnAdd" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <!-- table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" rowspan="2">STT</th>
                <th scope="col" rowspan="2">Tên thuốc</th>
                <th scope="col" rowspan="2">Số lượng</th>
                <th scope="col" rowspan="2">Đơn vị tính</th>
                <th scope="col" colspan="3" style="text-align: center;">Chi tiết</th>
            </tr>
            <tr>
                <th scope="col">Sáng</th>
                <th scope="col">Trưa</th>
                <th scope="col">Tối</th>
            </tr>
        </thead>
        <?php
        if (isset($get_prescript_patient)) {
            $i = 0;
            # code...
            foreach ($get_prescript_patient as $abc) {
                $i++;
                echo '
                <tbody>
                    <tr>
                        <th scope="row">' . $i . '</th>
                        <td>' . $abc['TenThuoc'] . '</td>
                        <td>' . $abc['SoLuong'] . '</td>
                        <td>' . $abc['DonVi'] . '</td>
                        <td>' . $abc['Sang'] . '</td>
                        <td>' . $abc['Trua'] . '</td>
                        <td>' . $abc['Toi'] . '</td>
                    </tr>
                </tbody>';
            }
        }

        ?>
    </table>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <?php
    echo'<a href="index.php?act=print-medical-records&id=' . $idRequest . '" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> In đơn thuốc</a>'
    ?>
    </div>
</div>