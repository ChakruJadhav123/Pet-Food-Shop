<?php

     $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "ps";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(!$con) {  
        die("Failed to connect with MySQL: ");  
    }

    //Authentication process
    $name = $_POST['name'];  
    $un = $_POST['un'];  
    $email = $_POST['email'];  
    $mno = $_POST['mno'];  
    $pass = $_POST['pass']; 
    $cpass = $_POST['cpass'];  
    $ptype = $_POST['ptype'];  
    $gender = $_POST['gender'];  
    $sql ="INSERT INTO `users` (`id`, `name`, `username`, `email`, `number`, `password`, `cpass`, `ptype`, `gender`, `time`) VALUES (NULL, '$name', '$un', '$email', '$mno', '$pass', '$cpass', '$ptype', '$gender', current_timestamp());";
    #$a = mysqli_query($con, $sql);
    if(mysqli_query($con, $sql) === TRUE) {
      echo "<center><h2 color:green; align-items:center;>Signed Up SUccessfully</h2></center>";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }

    #$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .button-5 {
  align-items: center;
  background-clip: padding-box;
  background-color: #fa6400;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: max-content;
}

.button-5:hover,
.button-5:focus {
  background-color: #fb8332;
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.button-5:hover {
  transform: translateY(-1px);
}

.button-5:active {
  background-color: #c85000;
  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
  transform: translateY(0);
}
</style>
<body>
    <form action="index.html" method="post">
        <center><button class="button-5" role="button">Go to Home Page</button></center>
    </form>
</body>
</html>