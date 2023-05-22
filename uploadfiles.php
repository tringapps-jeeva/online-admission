<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Documents Upload</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    img {
        width: 100%;
        height: 100px;
    }

    header {
        position: relative;
        font-size: 30px;
        font-weight: 600;
        color: #333;
        margin-left: 30px;
        margin-top: 5px;
        font-family: 'Times New Roman', Times, serif;
    }
    input[type=file]
    {
        font-weight: lighter;
    }
</style>

<body>
    <img src="images/i1.png">
    <header>UPLOADING DOCUMENTS</header>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Applicant photo</label>
                                <input type="file" name="img1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>10th Marksheet</label>
                                <input type="file" name="img2" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>12th Marksheet</label>
                                <input type="file" name="img3" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Community Certificate</label>
                                <input type="file" name="img4" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Birth Certificate </label>
                                <input type="file" name="img5" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Aadhar Card</label>
                                <input type="file" name="img6" class="form-control" >
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
session_start();
if (isset($_POST['submit'])) {
    include 'config.php';
    $location = "uploads/";
    $login_id = $_SESSION['email'];
    $file1 = $_FILES['img1']['name'];
    $file_tmp1 = $_FILES['img1']['tmp_name'];
    $img_ex = pathinfo($file1, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;

    $file2 = $_FILES['img2']['name'];
    $file_tmp2 = $_FILES['img2']['tmp_name'];
    $file3 = $_FILES['img3']['name'];
    $file_tmp3 = $_FILES['img3']['tmp_name'];
    $file4 = $_FILES['img4']['name'];
    $file_tmp4 = $_FILES['img4']['tmp_name'];
    $file5 = $_FILES['img5']['name'];
    $file_tmp5 = $_FILES['img5']['tmp_name'];
    $file6 = $_FILES['img6']['name'];
    $file_tmp6 = $_FILES['img6']['tmp_name'];
  //  $data = [];
  //  $data = [$file1, $file2, $file3, $file4, $file5, $file6];
   // $images = implode(' ', $data);
   $delete = "DELETE FROM doc WHERE login_id='".$_SESSION['email']."'";
   $query_run = mysqli_query($conn, $delete);
    $query = "INSERT  into doc (login_id,images,10th,12th,community,birth,aadhar) values('$login_id','$new_img_name','$file2','$file3','$file4','$file5','$file6')";
    $fire = mysqli_query($conn, $query);
    if ($fire) {
        move_uploaded_file($file_tmp1, $location . $new_img_name);
        move_uploaded_file($file_tmp2, $location . $file2);
        move_uploaded_file($file_tmp3, $location . $file3);
        move_uploaded_file($file_tmp4, $location . $file4);
        move_uploaded_file($file_tmp5, $location . $file5);
        move_uploaded_file($file_tmp6, $location . $file6);
        header('location:userdashboard.php');

    } else {
        echo "<script>alert('Please try again!!!')</script>";
    }
}    

?>