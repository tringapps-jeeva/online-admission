<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $login_id = $_SESSION['email'];
    $diff = $_POST['diff'];
    $service = $_POST['service'];
    $island = $_POST['island'];
    $cer = $_POST['cer'];
    $ncc = $_POST['ncc'];
    $hos = $_POST['hos'];
    if ($diff != " " && $service != " " && $island != " " && $cer != " " && $ncc != " " && $hos != "") {
        $delete = "DELETE FROM other WHERE login_id='".$_SESSION['email']."'";
        $query_run = mysqli_query($conn, $delete);
        $query = "INSERT INTO other (login_id,diff,service,island,cer,ncc,hos) VALUES ('$login_id','$diff','$service','$island','$cer','$ncc','$hos')";
        $query_run = mysqli_query($conn, $query);
        if ($query) {
            header('location:userdashboard.php');
        } else {
            echo "<script>alert('Please try again!!!')</script>";
        }
    } else
        echo "<script>alert('Please fil all the fields!!!')</script>";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other details</title>
    <link rel="stylesheet" href="css/otherdetails.css">
</head>

<body>
    <img src="images/i1.png">
    <header>OTHER DETAILS</header>
    <div class="container">
        <form action="" method="post">
            <table cellspacing="20">
                <tr>
                    <td> <label>Are you differently abled?</label></td>
                    <td><input type="radio" name="diff" value="YES"><label for="diffyes">Yes</label>
                        <input type="radio" name="diff" value="NO"><label for="diffyeno">No</label>
                    </td>
                </tr>

                <tr>
                    <td> <label>Are you son/ daughter of Ex-Service man of Tamil Origin?</label></td>
                    <td><input type="radio" name="service" value="YES"><label for="serviceyes">Yes</label>
                        <input type="radio" name="service" value="NO"><label for="serviceno">No</label>
                    </td>
                </tr>
                <tr>
                    <td> <label>Are you Tamil origin form Andaman Nicobar islands?</label></td>
                    <td><input type="radio" name="island" value="YES"><label for="islandyes">Yes</label>
                        <input type="radio" name="island" value="NO"><label for="islandno">No</label>
                    </td>
                </tr>
                <tr>
                    <td> <label>Do you have any outstanding sports Certificate?</label></td>
                    <td><input type="radio" name="cer" value="YES"><label for="ceryes">Yes</label>
                        <input type="radio" name="cer" value="NO"><label for="cerno">No</label>
                    </td>
                </tr>
                <tr>
                    <td> <label>NCC Certificate-A?</label></td>
                    <td><input type="radio" name="ncc" value="YES"><label for="nccyes">Yes</label>
                        <input type="radio" name="ncc" value="NO"><label for="nccno">No</label>
                    </td>
                </tr>
                <tr>
                    <td> <label>Do you need hostel accomodations?</label></td>
                    <td><input type="radio" name="hos" value="YES"><label for="hosyes">Yes</label>
                        <input type="radio" name="hos" value="NO"><label for="hosno">No</label>
                    </td>
                </tr>
            </table>
            <center> <button class="other" type="submit" name="submit">
                    <span class="btnText">Submit</span>
                </button>
                <center>
        </form>
    </div>
</body>

</script>

</html>