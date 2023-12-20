<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <?php

   $email= $_REQUEST['email'];
   $password= $_REQUEST['password'];

   $emailn="abd@gmail.com";
   $passwordn='2458';
   
   
    if($email==$emailn && $password==$passwordn) 
    {
      echo "log in successful";

    }
    else
    {
        echo"incorrect email address or password" ;
    }

    ?>
</body>
</html>