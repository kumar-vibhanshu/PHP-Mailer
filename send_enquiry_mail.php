<?php
date_default_timezone_set("Asia/Kolkata");
//functional code start
if(isset($_POST['submit']))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $number=$_POST["phone"];
    $ms=$_POST["message"];
    $to = 'vibhanshumonty@gmail.com';
   
    $subject = 'New Enquiry Details from Users - https://github.com/vibhanshumonty/PHP-Mailer';
    $message = "
                <html>
                <head>
                <title>Contact mail</title>
                </head>
                <body>
                <p>This email contains message and enquiry details</p>
                <table>
                <tr>
                <th>First Name:</th>
                <td>".$fname."</td> 
                </tr>
                <tr>
                <th>Last Name:</th>
                <td>".$lname."</td>
                </tr>
                <tr>
                <th>Email:</th>
                <th>".$email."</th> 
                </tr>
                <tr>
                <th>Number:</th>
                <td>".$number."</td>
                </tr>
                <tr>
                <th>Message:</th>
                <td>".$ms."</td>
                </tr>
                <tr>
                <th>Date:</th>
                <td>". date("d/m/Y")."</td>
                </tr>
                <tr>
                <th>Time:</th>
                <td>". date("h:i:s a")."</td>
                </tr>
                </table>
                
                </body>
                </html>
                ";
                 


    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
    // Sending email
    $dn= mail($to,$subject,$message,$headers);
    
    
    if($dn==TRUE){
       
        ?>
        
        <script type="text/javascript">
            alert("Enquiry form details sent successfully!!");
            window.location.href = "../index.html";
        </script>
        <?php 
    } else{
        ?>
        <script type="text/javascript">
            alert("Something is wrong!! Failed to send details. ");
            window.location.href = "../index.html";
        </script>
        <?php
    }
}
?>