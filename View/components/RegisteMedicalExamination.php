<!-- Đăng ký khám bệnh -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Đăng ký khám bệnh</h2>
        </div>

        <div class="row">

            <div class="col-lg-3 d-flex align-items-stretch"></div>

            <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="" method="POST" class="php-email-form">
                    <div class="row">
                        <!-- <div class="form-group col-md-6">
                            <label for="name">Chọn loại dịch vụ khám</label>
                            <input type="text" name="name" class="form-control" id="name" value="" required>
                        </div> -->
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="txtchuyenkhoa">Chọn chuyên khoa</label>
                            <!-- <input type="text" class="form-control" name="date" id="date" value="" required> -->
                            <select name="txtchuyenkhoa" class="form-control col-md-7" id="mySelect" onchange="myFunction()">
                                <option value="txtchuyenkhoa">---</option>
                                <?php
                                    
                                    foreach($RegisteMedicalExamination as $chuyenkhoa) {
                                        // array_unique($chuyenkhoa["ChuyenKhoa"]);
                                        // echo "<option value='".$chuyenkhoa["ChuyenKhoa"]."'>".array_unique($chuyenkhoa["ChuyenKhoa"])."</option>";
                                        echo "<option value='".$chuyenkhoa["ID_ChuyenKhoa"]."'>".$chuyenkhoa["ChuyenKhoa"]."</option>";
                                    }
                                    
                                ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Chọn bác sĩ</label>
                            <select name="txtbacsi" class="form-control col-md-7" onchange="myFunction1()">
                                <option value="" id="demo">---</option>
                                <?php
                                // if(isset($_POST['txtcoso'])){
                                //     foreach($_POST['txtcoso'] as $bacsi) {
                                //     echo "<option value='".$bacsi["ChuyenKhoa"]."'>".$bacsi["HoTen"]."</option>";
                                //     }
                                // }
                                ?>
                                <script>
                                function myFunction() {
                                var x = document.getElementById("mySelect").value;
                                document.getElementById("demo").innerHTML = "" + x;
                                }
                            </script>
                            </select>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="tel">Chọn ngày khám</label>
                            <input type="text" class="form-control" name="tel" id="tel" value="" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Chọn giờ khám</label>
                            <input type="email" name="email" class="form-control" id="email" value="" required>
                        </div>
                        <!-- <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="cmnd">Vấn đề sức khỏe cần khám</label>
                            <input type="text" class="form-control" name="cmnd" id="cmnd" value="" required>
                        </div> -->
                    </div>
                    <div class="form-group mt-3">
                        <label for="address">vấn đề sức khỏe cần khám</label>
                        <input type="text" class="form-control" name="address" id="address" value="" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Cập nhật" name="btnUpdate" class="btn btn-success">
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>