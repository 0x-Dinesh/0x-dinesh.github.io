<?php
if (isset($_POST['Send'])) {
    $Name =  $_POST['Name'];
    $Email = $_POST["Email"];
    $Message = $_POST['Message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "dineshmurugan278@gmail.com";
    $mail->Password = "ebppsezybqbciqbf";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
    
    $mail->isHTML(true);
    $mail->setFrom($Email, $Name);
    $mail->addAddress("Dineshmurugan278@gmail.com");
    $mail->Subject = ("$Email ($Message)");
    $mail->Body = $Message;
    

    if($mail->send()){
        echo "Mail sended!";
    }
    else{
        echo "Mail not sended!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="Name" id="Name" placeholder="Name" class="Name">
        <br>
        <input type="email" name="Email" id="Email" placeholder="Email" class="Email">
        <br>
        <textarea name="Message" id="Message" rows="10" placeholder="Message" class="Message"></textarea>
        <br>
        <input type="submit" value='Send' class="Sendbtn" name="Send">
    </form>
</body>

</html>