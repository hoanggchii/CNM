<div class="container">
  <br><br>
  <div class="section-title">
    <h2>Lịch sử đăng ký khám bệnh</h2>
  </div>
  <br>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Chuyên khoa</th>
        <th scope="col">Bác sĩ</th>
        <th scope="col">Thời gian</th>
        <th scope="col">Vấn đề sức khỏe</th>
        <th scope="col">Ghi Chú</th>
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
                      <td scope='row'>" . $abc['ChuyenKhoa'] . "</td>
                      <td scope='row'>" . $abc['BacSi'] . "</td>
                      <td scope='row'>" . $abc['ThoiGian'] . "</td>
                      <td scope='row'>" . $abc['VanDeSK'] . "</td>";
                      if ($abc['GhiChu'] == null){
                        echo "<td scope='row'>Chưa xác nhận</td>";
                      } else {
                        echo "
                          <td scope='row'>" . $abc['GhiChu'] . "</td>";
                      }
        echo "</tr>
                  </tbody>";
      }
    }
    ?>
  </table>
</div>