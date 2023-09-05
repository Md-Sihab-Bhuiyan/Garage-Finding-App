<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};
if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header('location:login.php');


}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <Mete name="vierport" content="width=device-width, initial-scale-1.0">
            <title>home</title>
            <link rel="stylesheet" href="css/style.css">
            </head>
    <body>
        <div class="container">
        <div class="profile">
            <?php
             die('query failed');
             if(mysqli_num_rows($select) 0){
                 $fetch= mysqli_fetch_assoc($select);
             }
             if($fetch['image'] == ''){
                 echo '<img src="images/default-avatar.png">';
             }else{
                 echo '<img src="uploded_img/'.$fetch['image'].'">';
             } 


            ?>

            <h3><?php echo $fetch['name'];?></h3>
            <a href="update_profile.php" class="btn">update profile</a>
            <a href="home.php?logout=<?php echo $user_id; ?>" class="delet-btn">logout</a>
            <p>new <a href="loging.php">login</a>or <a href= "register.php"> </p>


</div>
</div>


</body>
</html>