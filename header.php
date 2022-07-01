<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> PHP Project 01</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/header.css">
        
</head>
<body>
    <nav>

<div class="wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="bottlelist.php">Bottle List</a></li>
            <li><a href="topbottles.php">Top Bottles</a></li>
            <li><a href="MyCollection.php">MyCollection</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php
            //check if the user is logged in
/*if(isset($_SESSION["useruid"])){
echo     "<li><a href='profile.php'>Profile page</a></li>";
echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";

}
else{
   echo "<li><a href='signup.php'>Sign up</a></li>";
 echo   "<li><a href='login.php'>Log in</a></li>";
}*/
        ?>
</ul>
</div>
    </nav>
    <div class="wrapper">