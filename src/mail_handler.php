<?php 
if(isset($_POST['submit'])){
    $to = "rifqi.tampan61@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = "Pesan Dari Website Murah";
    $subject2 = "Copy of your form submission";
    $about = $name . " ". " wrote the following:" . "\n\n" . $_POST['about'];
    $about2 = "Here is a copy of your about " . $name . "\n\n" . $_POST['about'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$about,$headers);
    mail($from,$subject2,$about2,$headers2); // sends a copy of the about to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>