<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Title Content Row-->
  <div class="row">
    <div class="col-12 mb-4 text-center">
      <h2 class="font-weight-bold text-info text-uppercase">Danh sách bệnh án</h2>
    </div>
  </div>
  <!-- <a href="index.php?act=add-medical-record" class="font-weight-bold text-info">Thêm bệnh án</a> -->
  <div class="row justify-content-center">
    <div class="col-lg-12 mb-5 table-responsive">
      <table class="table table-hover table-sm table-striped">
        <thead>
          <tr class="table-info">
            <th scope="col">STT</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">SDT</th>
            <th scope="col">Chẩn đoán</th>
            <th scope="col">Kết luận</th>
            <th scope="col">Lưu ý</th>
            <th scope="col" class="text-center">Thêm đơn thuốc</th>
            <th scope="col" class="text-center">Cập nhật</th>
          </tr>
        </thead>
        <?php
        if (isset($medicalRecord)) {
          $i = 0;
          foreach ($medicalRecord as $medical) {
            $i++;
            echo "<tbody'>
                    <tr>
                      <td style='text-align: center; scope='row'>" . $i . "</td>
                      <td scope='row'>" . $medical['HoTen'] . "</td>
                      <td scope='row'>" . $medical['NgaySinh'] . "</td>
                      <td scope='row'>" . $medical['SDT'] . "</td>
                      <td scope='row'>" . $medical['ChanDoan'] . "</td>
                      <td scope='row'>" . $medical['KetLuan'] . "</td>
                      <td scope='row'>" . $medical['LuuY'] . "
                      <td class='text-center'><a href='index.php?act=add-prescriptions&id=" . $medical['MaHoSo'] . "'><i class='fa fa-eye text-dark'></i></a></td>
                      <td class='col-1 text-center'><a href='index.php?act=update-medical-record&id=" . $medical['MaHoSo'] . "'><i class='fas fa-pen-square text-success'></i></a></td>";
            echo "</tr>
                  </tbody>";
          }
        }
        ?>
      </table>
    </div>