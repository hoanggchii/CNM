<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div> -->


<!-- Content Row -->
<!-- Title Content Row-->
<div class="row">
    <div class="col-12 mb-4 text-center">
        <h2 class="font-weight-bold text-info text-uppercase">Danh sách người dùng</h2>
    </div>
</div>

<!-- Content Row -->
<!-- Form Document -->

<a href="index.php?act=add-user" class="font-weight-bold text-info"><i class="fa fa-pen"></i> Thêm người dùng</a>
<div class="row justify-content-center">
    <div class="col-lg-12 mb-5 table-responsive">
        <table class="table table-hover table-sm table-striped">
            <thead>
              <tr class="table-info">
                <th scope="col">STT</th>
                <th scope="col">Tên đăng nhập</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">SDT</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Role</th>
                <th scope="col" class="text-center">Sửa</th>
                <th scope="col" class="text-center">Xóa</th>
              </tr>
            </thead>
            <?php
            if (isset($user)) {
                $i = 0;
                foreach ($user as $abc) {
                  $i++;
                  echo "<tbody'>
                              <tr>
                                <td style='text-align: center; scope='row'>" . $i . "</td>
                                <td scope='row'>" . $abc['TenDangNhap'] . "</td>
                                <td scope='row'>" . $abc['HoTen'] . "</td>
                                <td scope='row'>" . $abc['NgaySinh'] . "</td>
                                <td scope='row'>" . $abc['SDT'] . "</td>
                                <td scope='row'>" . $abc['DiaChi'] . "</td>
                                <td scope='row'>" . $abc['Role'] . "</td>
                                <td class='col-1  text-center'><a href='#'><i class='fas fa-pen-square text-success'></i></a></td>
                                <td class='col-1 text-center'><a href='#'><i class='fas fa-trash-alt text-danger'></i></a></td>
                            </tr>
                            
                          
                        </tbody>";
                }
              }
            ?>
          </table>
    </div>
</div>

</div>
<!-- /.container-fluid -->