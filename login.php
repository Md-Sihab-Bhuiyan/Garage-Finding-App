<?php
include 'config.php';
session_start();
if(isset($_POST['submit'])){
    
    $emale = mysqli_real_escape_string($conn, $_POST['name'])
    $pass = mysqli_real_escape_string($conn, md5['password'])
   
    
    $select = mysqli_quer($conn,"SELECT *  From 'user_form" WHERE email = '$email'ANS passwoed="$pass")or die('query failed')
    if(mysqli_num_rows($select) > 0){
        $row =mysqli_fetch_assoc($select);
        $_SESSION['user id']=$row['id']
        header('location:home.php');
        

    }else{
        $message[]='incorrect email or password!'
    }





}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <Mete name="vierport" content="width=device-width, initial-scale-1.0">
            <title>login</title>
            <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <dive class="form-container">
            <form action=""method="post" enctype="multipart/form-data"></form>
            <h3>login now </h3>
            <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<div class="message">'.$message'</div>';
                }
            }
            <input type="email" name="email" placeholder="enter email" class="box" required>
            <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
            <input type="submit" name="ssubmit" value="login now" class="btn">
            <p>don't have an account? <a href="register.php">regiser now </a> </p>
        
</body>
</html>