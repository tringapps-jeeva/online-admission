<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $login_id = $_SESSION['email'];
    if (empty($_POST['aided'])) {
        $aided = [0];
    } else {
        $aided = $_POST['aided'];
    }
    if (empty($_POST['self'])) {
        $self = [0];
    } else {
        $self = $_POST['self'];
    }
    if($self==[0] && $aided==[0])
    {
        echo "<script>alert('Please select any one of the courses')</script>";
    } else {
        $aided1 = implode(",", $aided);
        if ($aided != [0]) {
            for ($i = 0; $i <= sizeof($aided) - 1; $i++) {
                $amount = ($i + 1) * 50;
            }
        }
        else
        {
            $amount = 0;
        }
        $self1 = implode(",", $self);
        if ($self != [0]) {
            for ($i = 0; $i <= sizeof($self) - 1; $i++) {
                $amount1 = ($i + 1) * 150;
            }
        }
        else
        {
            $amount1 = 0;
        }
        $delete = "DELETE FROM courses WHERE login_id='".$_SESSION['email']."'";
        $query_run = mysqli_query($conn, $delete);
        $query = "INSERT INTO courses(login_id,aidedcourses,amount) VALUES  ('$login_id','$aided1',$amount)";
        $query_run = mysqli_query($conn, $query);
        $delete = "DELETE FROM courses1 WHERE login_id='".$_SESSION['email']."'";
        $query_run = mysqli_query($conn, $delete);
        $query1 = "INSERT INTO courses1(login_id,selfcourses,amount) VALUES ('$login_id','$self1',$amount1)";
        $query_run = mysqli_query($conn, $query1);
        if ($query == true && $query1 == true) {
            header("location:payment.php");
        }
    }
}
?>
<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="css/selectedcourses.css">
</head>

<body>
    <img src="images/i1.png">
    <header>COURSES</header>
    <form action="" method="post">
        <!-- Aided Courses -->
        <fieldset class="field">
            <legend>Aided</legend>
            <table cellspacing="10">
                <tr>
                    <td><input type="checkbox" name="aided[]" value="B.A Tamil">B.A Tamil</td>
                    <td><input type="checkbox" name="aided[]" value="B.A English">B.A English</td>
                    <td><input type="checkbox" name="aided[]" value="B.A Economics">B.A Economics(Tamil Medium)</td>
                    <td><input type="checkbox" name="aided[]" value="B.Com">B.Com</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="aided[]" value="B.B.A">B.B.A </td>
                    <td><input type="checkbox" name="aided[]" value="B.Sc Mathematics">B.Sc Mathematics</td>
                    <td><input type="checkbox" name="aided[]" value="B.Sc Physics">B.Sc Physics</td>
                    <td><input type="checkbox" name="aided[]" value="B.Sc Chemistry">B.Sc Chemistry</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="aided[]" value="B.Sc Botany">B.Sc Botany</td>
                    <td><input type="checkbox" name="aided[]" value="B.Sc Computer Science">B.Sc Computer Science</td>
                    <td><input type="checkbox" name="aided[]" value="B.Sc Zoology">B.Sc Zoology</td>
                </tr>

            </table>
        </fieldset>
        <!-- Self financed Courses -->
        <fieldset class="field">
            <legend>Self financed Courses</legend>
            <table cellspacing="15">
                <tr>
                    <td><input type="checkbox" name="self[]" value="B.A English">B.A English</td>
                    <td><input type="checkbox" name="self[]" value="B.Com">B.Com</td>
                    <td><input type="checkbox" name="self[]" value="B.Com Professional Accounting">B.Com Professional
                        Accounting</td>
                    <td><input type="checkbox" name="self[]" value="B.Com Computer Application">B.Com Computer
                        Application
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="self[]" value="B.Com Honours">B.Com Honours</td>
                    <td><input type="checkbox" name="self[]" value="B.Com Honours">B.Com Business Process Services</td>
                    <td><input type="checkbox" name="self[]" value="B.C.A">B.C.A </td>
                    <td><input type="checkbox" name="self[]" value="B.B.A">B.B.A </td>

                </tr>
                <tr>
                    <td><input type="checkbox" name="self[]" value="B.Sc Mathematics">B.Sc Mathematics</td>
                    <td><input type="checkbox" name="self[]" value="B.Sc Physics">B.Sc Physics</td>
                    <td><input type="checkbox" name="self[]" value="B.Sc Chemistry">B.Sc Chemistry</td>
                    <td><input type="checkbox" name="self[]" value="B.Sc Biotechnology">B.Sc Biotechnology</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="self[]" value="B.Sc Microbiology">B.Sc Microbiology</td>
                    <td><input type="checkbox" name="self[]" value="B.Sc Computer Science">B.Sc Computer Science</td>
                    <td><input type="checkbox" name="self[]" value="B.Sc Computer Science in Cognitive System">B.Sc
                        Computer
                        Science in Cognitive System</td>
                    <td><input type="checkbox" name="self[]" value="B.Sc It">B.Sc Information Technology</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="self[]" value="B.Sc Psychology">B.Sc Psychology</td>
                    <td><input type="checkbox" name="self[]" value="B.Sc Data Science">B.Sc Data Science</td>
                </tr>
            </table>
        </fieldset>
        <center> <button class="other" type="submit" name="submit">
                <span class="btnText">Submit</span>
            </button>
            <center>
    </form>
</body>

</html>