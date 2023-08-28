<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["name"]) &&
        isset($_POST["email_address"]) &&
        isset($_POST["mobile_number"]) &&
        isset($_POST["subject"]) &&
        isset($_POST["message"])
    ) {
        $name = $_POST["name"];
        $email = $_POST["email_address"];
        $phone = $_POST["mobile_number"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Recipient email
        $toMail = "pranecreation@gmail.com";
        
        // Build email header
        $header = "From: " . $name . "<". $email .">\r\n";

        // Send email
        if (mail($toMail, $subject, $message, $header)) {
            echo "Mail sent";
        } else {
            echo "Mail not sent";
        }
    } else {
        echo "Form fields are not properly set.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiruu Portfolio </title>

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <!--JS-->
    <script src="script.js"></script>
    <!--FONT-->    
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<section class="home-page" id="home-page">   
        <div class="nav">
            <a href="#" class="mylogo">Hiruni Liyanage</a>
            <i class="bx bx-menu" id="menu-open"></i>
           <i class='bx bx-x'id="menu-close"></i>
            <div class="navbar">
                <a href="/index.html" class="home">Home</a>
                <a href="about/about.html" class="about">About</a>           
                <a href="graphic-projects/graphic-projects.html" class="graphic-projects">Graphic Projects</a>            
                <a href="web-projects/web.html" class="web-project">Web Projects</a>             
             </div><!--navbar-->  
        </div> 
    <h1>Email Sent</h1>
    <p>Home</p>
</body>
</html>
