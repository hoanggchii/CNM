<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        /* font: 12pt "Tohoma"; */
    }

    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .page {
        width: 21cm;
        overflow: hidden;
        min-height: 297mm;
        padding: 2.5cm;
        margin-left: auto;
        margin-right: auto;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 237mm;
        outline: 2cm #FFEAEA solid;
    }

    @page {
        size: A4;
        margin: 0;
    }

    button {
        width: 100px;
        height: 24px;
    }

    .header {
        overflow: hidden;
    }

    .logo {
        background-color: #FFFFFF;
        text-align: left;
        float: left;
        /* width: 100px;
        height: 100px; */
    }

    .company {
        padding-top: 24px;
        text-transform: uppercase;
        background-color: #FFFFFF;
        text-align: right;
        float: right;
        font-size: 16px;
    }

    .title {
        text-align: center;
        position: relative;
        color: #000000;
        font-weight: 800;
        font-size: 24px;
        top: 1px;
    }

    .footer-left {
        text-align: center;
        text-transform: uppercase;
        padding-top: 24px;
        position: relative;
        height: 150px;
        width: 50%;
        color: #000;
        float: left;
        font-size: 12px;
        bottom: 1px;
    }

    .footer-right {
        text-align: center;
        text-transform: uppercase;
        padding-top: 24px;
        position: relative;
        height: 150px;
        width: 50%;
        color: #000;
        font-size: 12px;
        float: right;
        bottom: 1px;
    }

    .TableData {
        background: #ffffff;
        font: 11px;
        width: 100%;
        border-collapse: collapse;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 12px;
        border: thin solid #d3d3d3;
    }

    .TableData TH {
        background: rgba(0, 0, 255, 0.1);
        text-align: center;
        font-weight: bold;
        color: #000;
        border: solid 1px #ccc;
        height: 24px;
    }

    .TableData TR {
        height: 24px;
        border: thin solid #d3d3d3;
    }

    .TableData TR TD {
        padding-right: 2px;
        padding-left: 2px;
        border: thin solid #d3d3d3;
    }

    .TableData TR:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .TableData .cotSTT {
        text-align: center;
        width: 10%;
    }

    .TableData .cotTenSanPham {
        text-align: left;
        width: 40%;
    }

    .TableData .cotHangSanXuat {
        text-align: left;
        width: 20%;
    }

    .TableData .cotGia {
        text-align: right;
        width: 120px;
    }

    .TableData .cotSoLuong {
        text-align: center;
        width: 50px;
    }

    .TableData .cotSo {
        text-align: right;
        width: 70px;
    }

    .TableData .tong {
        text-align: right;
        font-weight: bold;
        text-transform: uppercase;
        padding-right: 4px;
    }

    .TableData .cotSoLuong input {
        text-align: center;
    }

    @media print {
        @page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>

<body>
    <div id="page" class="page">
        <div class="header">
            <!-- <div class="logo"><img src="../../View/assets/img/logo01.png"></div> -->
            <!-- <div class="logo"><img src="C:\xampp\htdocs\CNM\View\assets\img\logo.png" /></div> -->
            <div class="company">Phòng khám chăm sóc sức khỏe</div>
        </div>
        <br />
        <div class="title">
            KẾT QUẢ KHÁM BỆNH
            <br />
            -------oOo-------
        </div>
        <br />
        <br />
        <div>
            <b>Họ và tên: </b> <?php echo $user["HoTen"]; ?>
            <br>
            <b>Địa chỉ: </b> <?php echo $user["DiaChi"]; ?>
            <br>
            <b>Chẩn đoán:</b> <?php echo $user["ChanDoan"]; ?>
            <br>
            <b>Thuốc điều trị</b>
            <br>
        </div>
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
            if (isset($print_prescript)) {
                $i = 0;
                foreach ($print_prescript as $prescript) {
                    $i++;
                    echo '
                    <tbody>
                    <tr>
                        <th scope="row">' . $i . '</th>
                        <td>' . $prescript['TenThuoc'] . '</td>
                        <td>' . $prescript['SoLuong'] . '</td>
                        <td>' . $prescript['DonVi'] . '</td>
                        <td>' . $prescript['Sang'] . '</td>
                        <td>' . $prescript['Trua'] . '</td>
                        <td>' . $prescript['Toi'] . '</td>
                    </tr>
                </tbody>
                    
                    ';
                }
            }
            ?>
        </table>
        <div class="footer-left"><br />
            Khách hàng </div>
        <?php
        $getdate = getdate();
        // echo $getdate;

        echo '<div class="footer-right"> TP.HCM, ngày ' . $getdate['mday'] . ' tháng ' . $getdate['mon'] . ' năm ' . $getdate['year'] . '<br />
                Bác sĩ 
                <br><br><br><br>';
        $get_doctor = $username_doctor['BacSi'];
        echo $get_doctor . '</div>';
        ?>
    </div>
</body>