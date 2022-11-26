<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Title Content Row-->
  <div class="row">
    <div class="col-12 mb-4 text-center">
      <h2 class="font-weight-bold text-info text-uppercase">Danh sách bệnh nhân</h2>
    </div>
  </div>
  <a href="index.php?act=add-patient" class="font-weight-bold text-info">Thêm bệnh nhân</a>
  <div class="row justify-content-center">
    <div class="col-lg-12 mb-5 table-responsive">
      <table class="table table-hover table-sm table-striped">
        <thead>
          <tr class="table-info">
            <th scope="col">STT</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">SDT</th>
            <th scope="col">Email</th>
            <th scope="col">CMND</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col" class="text-center">Xem bệnh án</th>
            <th scope="col" class="text-center">Sửa</th>
          </tr>
        </thead>
        <?php
        if (isset($patient)) {
          $i = 0;
          foreach ($patient as $abc) {
            $i++;
            echo "<tbody'>
                    <tr>
                      <td style='text-align: center; scope='row'>" . $i . "</td>
                      <td scope='row'>" . $abc['HoTen'] . "</td>
                      <td scope='row'>" . $abc['NgaySinh'] . "</td>
                      <td scope='row'>" . $abc['SDT'] . "</td>
                      <td scope='row'>" . $abc['Email'] . "</td>
                      <td scope='row'>" . $abc['CMND'] . "</td>
                      <td scope='row'>" . $abc['DiaChi'] . "</td>
                      <td class='text-center'><a href='index.php?act=medical-record&id=".$abc['MaTaiKhoan']."'><i class='fa fa-eye text-dark'></i></a></td>
                      <td class='col-1 text-center'><a href='index.php?act=update-patient&id=".$abc['MaTaiKhoan']."'><i class='fas fa-pen-square text-success'></i></a></td>";
            echo "</tr>
                  </tbody>";
          }
        }
        ?>
      </table>
    </div>