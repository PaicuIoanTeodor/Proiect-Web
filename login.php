<?php
session_start();
?>
<link href="css/login.css" rel="stylesheet">

    <section class="signup-form">

<hl>
<h1>Login<h1><br>
<form action="includes/login.inc.php" method="post">
<input type="text" name="uid" placeholder="Username/Email"><br>
<input type="text" name="pwd" placeholder="password"><br>
<button type="submit" name="submit">Login</button>
</form>
</hl>
<form action="signup.php" method="POST">
  <button type="submit" name="submit">register</button>
</form>
</div>
<?php
if(isset($_GET["error"])){
if($_GET["error"]=="emptyinput")
{
    echo "<p>Fill in all the fields!</p>";
}
else if($_GET["error"]=="wrong login")
{
    echo "<p> Incorrect login </p>";
}
}


?>
    </section>



<?php
include_once 'footer.php';
?>