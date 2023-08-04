<?php include('validate.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="contact">
        <h1>Contact Us</h1>

        <?php 
            if(isset($_SESSION['msg'])) //check if session is set or not
            {
                echo $_SESSION['msg']; //display message
                unset($_SESSION['msg']); //unset the session
            }
        ?>

        <form action="validate.php" method="post">
            <div class="form-content">
                <label for="full-name">Full Name: </label></br>
                <input type="text" name="full-name" id="full-name" placeholder="Enter Your Name....!" required></br>
                <label for="phone-number">Phone No: </label></br>
                <input type="number" name="phone-number" id="phone-number" placeholder="Enter Your Phone Number...!" required></br>
                <label for="email">Email: </label></br>
                <input type="email" name="email" id="email" placeholder="Enter Your Email Address...!" required></br>
                <label for="subject">Subject</label></br>
                <input type="text" name="subject" id="subject" placeholder="Enter Subject Details...!" required></br>
                <label for="msg">Message: </label></br>
                <textarea name="msg" name="msg" id="msg" cols="40" rows="8"
                    placeholder="Enter your query here...!" required></textarea></br>
                <!-- <input type="text" id="msg" placeholder="Enter your query here...!"> -->
                <input type="submit" class="submit-btn" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>