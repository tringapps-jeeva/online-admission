<?php
@include 'config.php';
if (isset($_GET['selectemail'])) {
    $email = $_GET['selectemail'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sending Mail</title>
    <link rel="stylesheet" href="css/sendmailcss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .mail-form
    {
       height: 500px;
    }
    </style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 mail-form">
                <?php
                $recipient = "";
                if (isset($_POST['send'])) {
                    $email = $_GET['selectemail'];
                    $recipient = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    if (empty($recipient) || empty($subject) || empty($message)) {
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php echo "All inputs are required!" ?>
                        </div>
                        <?php
                    } else {
                        if (mail($recipient, $subject, $message)) {
                            ?>
                            <?php
                            echo "<script>
                                var prompt =window.confirm('Mail sent successfully');
                                if(prompt)document.location.href='mail.php';
                                </script>";
                            ?>
                            <?php
                        } else {
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed while sending your mail!" ?>
                            </div>
                            <?php
                        }
                    }
                }
                ?>
                <form action="" method="POST">
                    <h2 class="text-center">Send Message</h2>
                    <p class="text-center">Send mail to Applicant.</p>
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Recipients"
                            value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" type="text" placeholder="Subject"
                            value="<?php echo "Confirmation " ?>">
                    </div>
                    <div class="form-group" >
                        <textarea style="height:150px" cols="30" rows="5" class="form-control textarea" name="message"
                            placeholder="Compose your message.."><?php 
                             $sql = "SELECT aidedcourses FROM courses where login_id='$email'";
                             $result = mysqli_query($conn, $sql);
                             while ($row = mysqli_fetch_assoc($result)) {
                             echo "You are selected for the ".$row['aidedcourses']." course";
                             }
                            ?>
                            </textarea>
                    </div>
            </br><br>
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="send" value="Send"
                            placeholder="Subject">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>