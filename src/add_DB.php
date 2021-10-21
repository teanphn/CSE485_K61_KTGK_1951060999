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
      <h1>Thêm bệnh nhân</h1>
      <form method="POST">
        <div class="mb-3">
            <label  class="form-label">Tên bệnh nhân</label>
            <input type="text" name="firstname" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Họ đệm bệnh nhân</label>
            <input type="text" name="lastname" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày sinh</label>
            <input type="datetime-local" name="dateofbirth" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Giới tính</label>
            <input type="text" name="gender" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" name="mobile" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Chiều cao</label>
            <input type="text" name="height" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Cân nặng</label>
            <input type="text" name="weight" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Nhóm máu</label>
            <input type="text" name="blood_type" class="form-control" >
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
    $patientid = $_POST['patientid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $blood_type = $_POST['blood_type'];
    $sql = "INSERT INTO 
    PATIENT (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`,`email`,`mobile`,`height`,`weight`,`blood_type`) 
    VALUES ('$patientid','$firstname','$lastname','$dateofbirth','$gender','$email','$mobile','$height','$weight','$blood_type')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location: index.php");
    } else {
        header("location: index.php");
    }
}
?>