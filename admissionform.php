<?php

@include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $login_id = $_SESSION['email'];
    $fullname = $_POST['fullname'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $email = $_POST['email'];
    $appphno = $_POST['app-phno'];
    $gender = $_POST['gender'];
    $community = $_POST['community'];
    $navdistrict = $_POST['nav-district'];
    $caste = $_POST['caste'];
    $tongue = $_POST['tongue'];
    $religion = $_POST['religion'];
    $aadhar = $_POST['aadhar'];
    $nation = $_POST['nation'];

    // address details
    $address = $_POST['address'];
    $district = $_POST['district'];
    $state = $_POST['state'];

    // parent details
    $fathername = $_POST['fathername'];
    $foccupation = $_POST['foccupation'];
    $fincome = $_POST['fincome'];
    $mothername = $_POST['mothername'];
    $moccupation = $_POST['moccupation'];
    $mincome = $_POST['mincome'];
    $parphno = $_POST['par-phno'];
    $area = $_POST['area'];
    $pincode = $_POST['pincode'];

    //inserting into database

        $delete = "DELETE FROM applicationform WHERE login_id='".$_SESSION['email']."'";
        $query_run = mysqli_query($conn, $delete);

        $query = "INSERT INTO applicationform (login_id,fullname,dob,email,appphno,gender,community,navdistrict,caste,tongue,religion,aadhar,nation,address,district,state,fathername,foccupation,fincome,mothername,moccupation,mincome,parphone,area,pincode) VALUES('$login_id','$fullname','$dob','$email','$appphno','$gender','$community','$navdistrict','$caste','$tongue','$religion','$aadhar','$nation','$address','$district','$state','$fathername','$foccupation','$fincome','$mothername','$moccupation','$mincome','$parphno','$area','$pincode')";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            header('location:userdashboard.php');
        } else {
            echo "<script>alert('Please try again!!!')</script>";
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admissioncss.css">
    <title>Personal Details</title>
</head>
<img src="images/i1.png">

<body>
    <div class="container">
        <header>ADMISSION FORM</header>

        <form action="#" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title" style="color: mediumblue;">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" required name="fullname">
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required name="dob">
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" required name="email">
                        </div>

                        <div class="input-field">
                            <label>Applicant Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" required name="app-phno">
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Community</label>
                            <select name="community" required>
                                <option disabled selected>Select Community</option>
                                <option value="OC">OC</option>
                                <option value="BC">BC</option>
                                <option value="MBC">MBC</option>
                                <option value="SC">SC</option>
                                <!-- <option value="OTHERS">OTHERS</option> -->
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Native District</label>
                            <input type="text" placeholder="Enter Native district" required name="nav-district">
                        </div>

                        <div class="input-field">
                            <label>Subcaste</label>
                            <select name="caste" required>
                                <option disabled selected>Select Subcaste</option>
                                <option value="OC">OC</option>
                                <option value="BC">BC</option>
                                <option value="MBC">MBC</option>
                                <option value="OTHERS">OTHERS</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Mother Tongue</label>
                            <input type="text" placeholder="Enter your Mother Tongue" required name="tongue">
                        </div>

                        <div class="input-field">
                            <label>Religion</label>
                            <select name="religion" required>
                                <option disabled selected>Select Religion</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Christian">Christian</option>
                                <option value="OTHERS">OTHERS</option>
                            </select>
                        </div>


                        <div class="input-field">
                            <label>Aadhar Number</label>
                            <input type="number" placeholder="Enter Aadhar Number" required name="aadhar">
                        </div>


                        <div class="input-field">
                            <label>Nationality</label>
                            <select name="nation" required>
                                <option disabled selected>Select Nationality</option>
                                <option value="Indian">Indian</option>
                                <option value="OTHERS">OTHERS</option>
                            </select>
                        </div>


                        <button class="nextBtn">
                            <span class="btnText">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title" style="color: mediumblue;">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Permanent or Temporary" required name="address">
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="Enter your District" required name="district">
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter your state" required name="state">
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title" style="color: mediumblue;">Family Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name/Guardian Name</label>
                            <input type="text" placeholder="Enter your Father name" required name="fathername">
                        </div>

                        <div class="input-field">
                            <label>Father/Guardian Occupation</label>
                            <input type="text" placeholder="Enter Father occupation" required name="foccupation">
                        </div>

                        <div class="input-field">
                            <label>Father/Guardian Yearly Income</label>
                            <input type="number" placeholder="Enter Father's income" required name="fincome">
                        </div>



                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" placeholder="Enter your Mother name" required name="mothername">
                        </div>

                        <div class="input-field">
                            <label>Mother Occupation</label>
                            <input type="text" placeholder="Enter mother occupation" required name="moccupation">
                        </div>

                        <div class="input-field">
                            <label>Mother Yearly income</label>
                            <input type="number" placeholder="Enter Mother's income" required name="mincome">
                        </div>

                        <div class="input-field">
                            <label>Parents Contact Number</label>
                            <input type="number" placeholder="Enter Contact number" required name="par-phno">
                        </div>

                        <div class="input-field">
                            <label>Area</label>
                            <select required name="area">
                                <option disabled selected>Select Area</option>
                                <option value="Rural">Rural</option>
                                <option value="Urban">Urban</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Pincode</label>
                            <input type="number" placeholder="Enter Pincode" required name="pincode">
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <div class="backBtn">
                        <span class="btnText">Back</span>
                    </div>

                    <button class="sumbit" type="submit" name="submit" id="personal">
                        <span class="btnText">Submit</span>
                    </button>
                </div>
            </div>
    </div>
    </form>
    </div>

    <script src="js/admissionscript.js"></script>
</body>

</html>