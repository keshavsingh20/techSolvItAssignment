<?php include('db_connection/config.php'); ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
  $err = array();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // from validation
    $fullName = $_POST["full-name"];
    $phoneNumber = $_POST["phone-number"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg = $_POST["msg"];


    if($fullName == "") {
        $err[] = "Please Enter Your Name...!";
    }
    if(empty($phoneNumber)) {
        $err[] = "Please Enter Your Phone Number...!";
    }
    if($email == "") {
        $err[] = "Please Enter Email address...!";
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err[] = "Invalid email format";
      }

    if($subject == "") {
        $err[] = "Please Enter Subject...!";
    } 
    if($msg == "") {
        $err[] = "Please Enter Your Message Details...!";
    }


    if(!empty($err)) {
        foreach($err as $e) {
           echo "<p>$e</p>";
        }
        exit;
    }


    // if our form-validation is successful then we will save our data to the database
    // our database configuration is kept in the config.php file and we have included that in this file
    // now get ip address and timestamp in variables
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('Y-m-d H:i:s');

    // now define our sql query to insert data into databse
    $qry = "INSERT INTO contact_form (fullName, phoneNumber, email, subject, message, ip_add, timeStamp) 
    VALUES ('$fullName', '$phoneNumber', '$email', '$subject', '$msg', '$ip', '$timestamp')";

    if(mysqli_query($conn, $qry) == true) {
        // $_SESSION['msg'] = "<p>Your Query Submitted Successfuly...!</p>";
        $_SESSION['msg'] = "<div class='success'><p>Your Query Submitted Successfuly...!</p></div>";
        // redirect to page again
        header('location:'.SITEURL);


        // now we will send the notification to the site owner
        // $to = "keshavyadav200018@gmail.com";
        // $subj_email = "New Form Submission";
        // $msg_email = "A new form submission has been received.\n\n";
        // $msg_email .= "Full Name: $fullname\n";
        // $msg_email .= "Phone Number: $phone\n";
        // $msg_email .= "Email: $email\n";
        // $msg_email .= "Subject: $subject\n";
        // $msg_email .= "Message: $message\n";
        // $headers = "From: $email\r\n";

        // mail($to, $subj_email, $msg_email, $headers);

        $to = "keshavyadav200018@gmail.com"; // Replace with your email address
        $subject = "Test Email";
        $message = "This is a test email sent from PHP.";
        $from = "keshavsingh200020@gmail.com";
        $headers = "From: $from"; // Replace with a valid email address

        // $phpmailer = new PHPMailer();
        // $phpmailer->isSMTP();
        // $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        // $phpmailer->SMTPAuth = true;
        // $phpmailer->Port = 2525;
        // $phpmailer->Username = '458dde42c1a179';
        // $phpmailer->Password = '53b523c2e202e7';

        if (mail($to, $subject, $message, $headers)) {
            echo "Test email sent successfully.";
        } else {
            echo "Failed to send the test email.";
        }
        
    }

}

?>