<?php
@include 'config.php';
if (isset($_GET['selectemail'])) {
    $email = $_GET['selectemail'];
    // echo $email;
    $sql = "UPDATE user_form SET status='selected' WHERE email ='" . $email . "' ";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        // header('location:userinfo.php');
        echo "<script>
        var prompt =window.confirm('Do you want to Select the Applicant?');
        if(prompt)document.location.href='userinfo.php';
        </script>";
    }
}
?>