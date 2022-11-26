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
                            <select name="txtchuyenkhoa" class="form-control col-md-7" id="txtchuyenkhoa" onchange="myFunction()">
                                <option value="">---</option>
                                <?php

                                foreach ($RegisteMedicalExamination as $chuyenkhoa) {
                                    echo "<option value='" . $chuyenkhoa["ID_ChuyenKhoa"] . "'>" . $chuyenkhoa["ChuyenKhoa"] . "</option>";
                                }
                                ?>

                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Chọn bác sĩ</label>
                            <select name="txtbacsi" class="form-control col-md-7" id="demo" onchange="myFunction1()">
                                <option value="txtbacsi">---</option>
                                <script>
                                    function myFunction() {
                                        var id = $('#txtchuyenkhoa').val();
                                        var data = 'id=' + id
                                        $.ajax({
                                            type: "POST",
                                            url: "getListMajor.php",
                                            beforeSend: function() {
                                                $('#demo')
                                                    .find('option')
                                                    .remove()
                                                    .end()
                                            },
                                            data: data,
                                            success: function(response) {
                                                var dataResponse = JSON.parse(response);
                                                $.each(dataResponse, function(key, item) {
                                                    $('#demo').append($('<option>', {
                                                        value: item.id,
                                                        text: item.nameDoctor
                                                    }));
                                                });
                                            }
                                        });
                                    }
                                </script>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="datetime">Chọn ngày giờ khám</label>
                            <select name="txtdatetime" class="form-control col-md-7" id="datetime">
                                <option value="txtdatetime">---</option>
                                <script>
                                    function myFunction1() {
                                        var id = $('#demo').val();
                                        var data = 'id=' + id
                                        $.ajax({
                                            type: "POST",
                                            url: "getListCalendar.php",
                                            beforeSend: function() {
                                                $('#datetime')
                                                    .find('option')
                                                    .remove()
                                                    .end()
                                            },
                                            data: data,
                                            success: function(response) {
                                                var dataResponse = JSON.parse(response);
                                                $.each(dataResponse, function(key, item) {
                                                    $('#datetime').append($('<option>', {
                                                        value: item.id,
                                                        text: item.calendar
                                                    }));
                                                });
                                            }
                                        });
                                    }
                                </script>
                            </select>
                        </div>
                    <div class="form-group mt-3">
                        <label for="address">vấn đề sức khỏe cần khám</label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Cập nhật" name="btnAdd" class="btn btn-success">
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>