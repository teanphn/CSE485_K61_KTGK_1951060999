<?php
include("constants.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Quản Lý Bệnh Viện</title>
  </head>
  <body>
    <div class="container">
      <h1>Danh sách bệnh nhân</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Mã bệnh nhân</th>
          <th scope="col">Tên</th>
          <th scope="col">Họ</th>
          <th scope="col">Ngày sinh</th>
          <th scope="col">Giới tính</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Email</th>
          <th scope="col">Chiều Cao</th>
          <th scope="col">Câng nặng</th>
          <th scope="col">Nhóm máu</th>
          <th scope="col">Ngày lập sổ</th>
          <th scope="col">Ngày cập nhật</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>
        </tr>
  </thead>
  <tbody>
                <?php
                $sql = "SELECT * FROM PATIENT";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($res)) {
                ?>
                        <tr>
                            <td scope="row"><?php echo $i; ?> </td>
                            <td><?php echo $row['patientid']; ?> </td>
                            <td><?php echo $row['firstname']; ?> </td>
                            <td><?php echo $row['lastname']; ?> </td>
                            <td><?php echo $row['dateofbirth']; ?> </td>
                            <td><?php echo $row['gender']; ?> </td>
                            <td><?php echo $row['mobile']; ?> </td>
                            <td><?php echo $row['email']; ?> </td>
                            <td><?php echo $row['height']; ?> </td>
                            <td><?php echo $row['weight']; ?> </td>
                            <td><?php echo $row['blood_type']; ?> </td>
                            <td><?php echo $row['created_on']; ?> </td>
                            <td><?php echo $row['modified_on']; ?> </td>
                            <td><a href="#"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete_DB.php?id=<?php echo $row['patientid']; ?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                <?php
                        $i++;
                    }
                }
                ?>
            </tbody>
</table>
    <a href="add_DB.php">Thêm dữ liệu</a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>