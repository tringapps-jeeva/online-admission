<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $login_id = $_SESSION['email'];
    $institution = $_POST['institution'];
    $district = $_POST['district'];
    $appearances = $_POST['appearances'];
    $regno = $_POST['regno'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $stream = $_POST['stream'];
    $board = $_POST['board'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];
    $subject5 = $_POST['subject5'];
    $subject6 = $_POST['subject6'];
    $mark1 = $_POST['mark1'];
    $mark2 = $_POST['mark2'];
    $mark3 = $_POST['mark3'];
    $mark4 = $_POST['mark4'];
    $mark5 = $_POST['mark5'];
    $mark6 = $_POST['mark6'];
    $total = $_POST['total'];

    //inserting into database
        $delete = "DELETE FROM educationdetails WHERE login_id='".$_SESSION['email']."'";
        $query_run = mysqli_query($conn, $delete);
    
    $query = "INSERT INTO educationdetails (login_id,institution,district,appearances,regno,month,year,stream,board,subject1,subject2,subject3,subject4,subject5,subject6,mark1,mark2,mark3,mark4,mark5,mark6,total) VALUES  ('$login_id ','$institution','$district','$appearances','$regno','$month','$year','$stream', '$board','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6',$mark1,'$mark2','$mark3','$mark4','$mark5','$mark6','$total')";
    $query1 ="UPDATE educationdetails SET majorTotal=mark3+mark4+mark5+mark6";
    $query_run = mysqli_query($conn, $query);
    $query_run1 = mysqli_query($conn, $query1);
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
    <title>Educational Details</title>
    <link rel="stylesheet" href="css/educationaldetails.css">
    <style>
        .table1 {
            margin-left: 50px;
            width: 90%;
        }
        .table2 {
            margin-left: 50px;
            width: 75%;
        }
    </style>


</head>

<body>
    <img src="images/i1.png">
    <header>EDUCATIONAL DETAILS</header>
    <div class="container">
        <form action="" method="post">
            <table class="table1" cellspacing="20">
                <tr>
                    <td><label>Name of the institution last studied</label></td>
                    <td><input type="text" name="institution" id="institution">
                    </td>
                </tr>
                <tr>
                    <td><label>District of the institution last studied</label></td>
                    <td><input type="text" name="district"></td>
                </tr>
                <tr>
                    <td><label>No of Appearances</label></td>
                    <td><input type="number" name="appearances"></td>
                    <td><label>Reg No of Hr.sec(+2) in 1st
                            &nbsp;&nbsp;&nbsp;&nbsp;Appearance
                    <td>
                    <td><input type="text" name="regno"></td>
                </tr>
                <tr>
                    <td><label>Month & Year Passing</label></td>
                    <td> <select name="month" required>
                            <option disabled selected>Select month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        <select name="year" required>
                            <option disabled selected>Select year</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                    </td>
                </tr>
                <tr>
                    <td><label>Stream</label></td>
                    <td><input type="radio" name="stream" value="Academic" />Academic
                        <input type="radio" name="stream" value="Vocational" />Vocational
                    </td>
                </tr>
                <tr>
                    <td><label>Hr.sec (+2) Board</label></td>
                    <td><input type="radio" name="board" value="state" />State
                        <input type="radio" name="board" value="CBSE" />CBSE
                        <input type="radio" name="board" value="ICSE" />ICSE
                    </td>
                </tr>
            </table>
            <table class="table2" width="100%" style="padding:5px;" cellspacing="15">
                <tr>
                    <th></th>
                    <th>Part-I</th>
                    <th>Part-II</th>
                    <th colspan="4">Part-III</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Subjects</td>
                    <td>
                        <select name="subject1" required>
                            <option disabled selected>Select Subject</option>
                            <option value="Tamil">Tamil</option>
                            <option value="Sanscrit">Sanscrit</option>
                            <option value="Hindi">Hindi</option>
                            <option value="French">French</option>
                            <option value="Urudu">Urudu</option>
                            <option value="Kanada">Kanada</option>
                        </select>
                    </td>
                    <td>
                        <select name="subject2" required>
                            <option disabled selected>Select Subject</option>
                            <option value="English">English</option>
                        </select>
                    </td>
                    <td>
                        <select name="subject3" required>
                            <option disabled selected>Select Subject</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Bio-Chemistry">Bio-Chemistry</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Physics">Physics</option>
                            <option value="Economics">Economics</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Zoology">Zoology</option>
                            <option value="Commerce">Commerce</option>
                            <option value="MicroBiology">MicroBiology</option>
                            <option value="Biology">Biology</option>
                            <option value="Botany">Botany</option>
                            <option value="History">History</option>
                            <option value="chemistry">chemistry</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value="Geography">Geography</option>
                        </select>
                    </td>
                    <td>
                        <select name="subject4" required>
                            <option disabled selected>Select Subject</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Bio-Chemistry">Bio-Chemistry</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Physics">Physics</option>
                            <option value="Economics">Economics</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Zoology">Zoology</option>
                            <option value="Commerce">Commerce</option>
                            <option value="MicroBiology">MicroBiology</option>
                            <option value="Biology">Biology</option>
                            <option value="Botany">Botany</option>
                            <option value="History">History</option>
                            <option value="chemistry">chemistry</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value="Geography">Geography</option>
                        </select>
                    </td>
                    <td>
                        <select name="subject5" required>
                            <option disabled selected>Select Subject</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Bio-Chemistry">Bio-Chemistry</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Physics">Physics</option>
                            <option value="Economics">Economics</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Zoology">Zoology</option>
                            <option value="Commerce">Commerce</option>
                            <option value="MicroBiology">MicroBiology</option>
                            <option value="Biology">Biology</option>
                            <option value="Botany">Botany</option>
                            <option value="History">History</option>
                            <option value="chemistry">chemistry</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value="Geography">Geography</option>
                        </select>
                    </td>
                    <td>
                        <select name="subject6" required>
                            <option disabled selected>Select Subject</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Bio-Chemistry">Bio-Chemistry</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Physics">Physics</option>
                            <option value="Economics">Economics</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Zoology">Zoology</option>
                            <option value="Commerce">Commerce</option>
                            <option value="MicroBiology">MicroBiology</option>
                            <option value="Biology">Biology</option>
                            <option value="Botany">Botany</option>
                            <option value="History">History</option>
                            <option value="chemistry">chemistry</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value="Geography">Geography</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Marks Obtained</td>
                    <td><input type="number" name="mark1" id="subject1"></td>
                    <td><input type="number" name="mark2" id="subject2"></td>
                    <td><input type="number" name="mark3" id="subject3"></td>
                    <td><input type="number" name="mark4" id="subject4"></td>
                    <td><input type="number" name="mark5" id="subject5"></td>
                    <td><input type="number" name="mark6" id="subject6"></td>
                   <td> <input type="number" name="total"></td>
                </tr>
                <tr style="text-align: center;">
                    <td>Maximum Marks</td>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td>600</td>
                </tr>
            </table>
        
    
       <center> <button class="educational" value="submit" name="submit" >
            <span class="btnText">Submit</span>
        </button>
    </center>   
        </form>
    </div>
</body>


</script>

</html>