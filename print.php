<?php require_once("config.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admission Form 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <style type="text/css">
        .container {
            width: 100%;
        }

        .form-group {
            padding-bottom: 10px;
        }
        label{
            font-weight: 700;
            font-family:'Times New Roman', Times, serif;
        }
        @media print
        {
            #printbtn
            {
                display: none;
            }
        }
    </style>
</head>

<body>
    
    <div class="container">
    
        <div class="row">
            <div class="col-sm-1">
            </div>

            <div class="col-12" style="border: 2px solid black; padding:20px; width: 650px;">
                <?php
                   $sql = "SELECT * FROM applicationform WHERE login_id ='".$_SESSION['email']."' ";
                $sqlrun = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($sqlrun)) {
                    ?>
                    <div class="row">

<div class="col-1">
</div>
<div class="col-sm-12" >
<img src="images/i1.png" style="width: 100%; height: 100px; "></div>

                    <div class="row">

                        <div class="col-2">
                        </div>
                        <div class="col-sm-8" style="text-align: center;padding-bottom: 25px;">
                        <br>
                            <h3> <u>ADMISSION FORM</u></h3>
                        </div>
                        <div class="col-sm-2">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-6">


                            <div class="form-group row">
                                <div class="col-12">

                                    <label>Full Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <!-- </div>
                                <div class="col-8"> -->
                                    <?php


                                    echo $row['fullname'];
                                    ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">

                                    <label>Father Name&nbsp;&nbsp;</label>
                                <!-- </div>
                                <div class="col-10"> -->
                                    <?php echo $row['fathername']; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="lable">Mother Name&nbsp;&nbsp;</label>
                                <!-- </div>
                                <div class="col-8"> -->
                                    <?php echo $row['mothername']; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Address</label>
                                </div>
                                <div class="col-8">
                                    <?php echo $row['address'] . "," .$row['district'].",". $row['pincode'] . ".";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Email</label>
                                </div>
                                <div class="col-8">
                                    <?php echo $row['email']; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="lable">Mobile No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                    <?php echo $row['appphno']; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">DOB</label>
                                </div>
                                <div class="col-8" required>
                                    <?php echo $row['dob']; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Gender</label>
                                </div>
                                <div class="col-8">
                                    <?php echo $row['gender']; ?>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Community</label>
                                </div>
                                <div class="col-8">
                                    <?php echo $row['community']; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Subcaste</label>
                                </div>
                                <div class="col-8">
                                    <?php echo $row['caste']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group" style="float: right;">
                                        <label class="lable"> Photo </label>
                                        <?php
                                        $sql = "SELECT * FROM doc WHERE login_id ='".$_SESSION['email']."'";

                                        $sqlrun = mysqli_query($conn, $sql);
                                        while ($row1 = mysqli_fetch_assoc($sqlrun)) {


                                            ?>
                                            <div style="width: 150px; ">
                                                <img src="uploads/<?php echo $row1['images'] ?>"
                                                    style="width: 150px; height: 150px; border: 2px solid black;">

                                                <!-- <embed type="application/pdf" src="uploads/<?php //echo $row1['images']?>" style="width: 150px; height: 150px; border: 2px solid black;"> -->

                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Nationality</label>
                                </div>
                                <div class="col-8">
                                <?php echo $row['nation']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Religion</label>
                                </div>
                                <div class="col-8">
                                    <?php echo $row['religion']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Area</label>
                                </div>
                                <div class="col-8">
                                <?php echo $row['area']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="lable">Aadhar no&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <!-- </div>
                                <div class="col-8"> -->
                                <?php echo $row['aadhar']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php
                $sql = "SELECT * FROM educationdetails WHERE login_id ='".$_SESSION['email']."'";
                $sqlrun = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($sqlrun)) {
                    ?>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="lable">School&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <!-- </div>
                                <div class="col-8"> -->
                                    <?php echo $row['institution'].",".$row['district']; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-10">
                                    <label class="lable">Month & Year of passing&nbsp;&nbsp;</label>
                                <!-- </div> -->
                                <!-- <div class="col-8"> -->
                                    <?php echo $row['month'].",".$row['year']; ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Board</label>
                                </div>
                                <div class="col-8">
                                    <?php echo strtoupper($row['board']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-10">
                                    <label class="lable">12th Marks&nbsp;&nbsp;&nbsp;</label>
                                <!-- </div>
                                <div class="col-8"> -->
                                    <?php echo ($row['total'])."/600"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-4">
                                    <label class="lable">Fees</label>
                                </div>
                                <div class="col-8">
                                    <?php //echo $row['course_fees']; ?> INR
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="lable">Payment Status&nbsp;&nbsp;&nbsp;</label>
                                <!-- </div>
                                <div class="col-8"> -->
                                    <?php echo "Success"; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row 4 end -->
                <?php } ?>
                
            </div>

            <!-- <div class="col-2"> -->
            </div>

        </div>
        
    </div>
    </div>
    <br>
    <center><button type="button" class="btn btn-info" id="printbtn" onclick="window.print()">Print Form</button>
    </center>
            
</body>

</html>