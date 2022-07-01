
<link href="css/login.css" rel="stylesheet">
    <section class="signup-form">
<h1>Sign up</h1>
<h1>
<form action="includes/signup.inc.php" method="post"><br>
<input type="text" name="name" placeholder="Full name"><br>
<input type="text" name="email" placeholder="email"><br>
<input type="text" name="uid" placeholder="username"><br>
<input type="text" name="pwd" placeholder="password"><br>
<input type="text" name="pwdrepeat" placeholder="repeat password"><br>
<button type="submit" name="submit">Sign up</button>
</form>
</h1>
</div>
<h1>
<?php

if(isset($_GET["error"])){
if($_GET["error"]=="emptyinput")
{
    echo "<p>Fill in all the fields!</p>";
}
else if($_GET["error"]=="invaliduid")
{
    echo "<p> Choose a proper username </p>";
}
else if($_GET["error"]=="invalidemail")
{
    echo "<p> Choose a proper email </p>";
}
else if($_GET["error"]=="passwords dont match")
{
    echo "<p> Passwords dont match </p>";
}
else if($_GET["error"]=="stmtfailed")
{
    echo "<p> An error occured </p>";
}
else if($_GET["error"]=="usernametaken")
{
    echo "<p> Choose another username </p>";
}
else if($_GET["error"]=="none")
{
    echo "<p> Signed in! </p>";
    header("location: index.php");
}
}


?>
    </section>


<?php
include_once 'footer.php';
?>
</h1>