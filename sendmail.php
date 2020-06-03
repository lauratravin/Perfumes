<!DOCTYPE html>
<head>
</head> 
 <meta charset="utf-8">        
        <meta name="author" content="Perfumes">
        <meta name="description" content="Perfumes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" type="text/css"  href="style-flex.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
      
          
        <title>Perfumes</title>   
<body>  
<?php

if(isset($_POST['submit'])){
// the message

$perfume=$_POST['myperfume'];
$nombre=$_POST['myname'];
$mail=$_POST['mymail'];

$msg = $perfume . "\n" . $nombre . "\n" . $mail;

// send email
if(mail("krina.97@gmail.com","My subject",$msg))
{
    
//  echo"<script>alert('Mail enviado. <br/>Muchas Gracias. Te contactaremos a la brevedad.');</script>";  
 echo"<span class='eco'>Mail enviado. <br/>Muchas Gracias. Te contactaremos a la brevedad.</span>";
 echo"<script> var myVar = setInterval(myTimer,5000);
                 function myTimer(){
                     document.location.href='perfumes.html';
                 }</script>";
}

else
{
    echo "error";
}
}
?>

</body>
</html>

<!-- //   echo "<script>document.location.href='perfumes.html';</script>";
 echo "<span class='eco'>Mail enviado. <br/>Muchas Gracias " . $nombre . ", te contactaremos a la brevedad.</span>"; -->