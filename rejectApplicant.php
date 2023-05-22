<?php
@include 'config.php';
if (isset($_GET['rejectemail'])) {
    $email = $_GET['rejectemail'];
    // echo $email;
    $sql = "UPDATE user_form SET status='rejected' WHERE email ='" . $email . "' ";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        // header('location:userinfo.php');
        echo "<script>
        var prompt =window.confirm('Do you want to Reject the Applicant?');
        if(prompt)document.location.href='userinfo.php';
        </script>";
    }
}
?>