<?php
if (isset($_POST["submit"])) {
$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["uid"];
$pwd = $_POST["pwd"];
$pwdrepeat = $_POST["pwdrepeat"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';


if(emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat)!== false){
header("location: ../signup.php?error=emptyinput");
echo "wrong";
exit();
}
if(invalidUID($username)!== false){
    header("location: ../signup.php?error=invaliduid");
    echo "wrong";
    exit();
    }
    if(invalidEmail($email)!== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
        }
        if(pwdmatch($pwd, $pwdrepeat)!== false){
            header("location: ../signup.php?error=passwords dont match");
            exit();
            }
            if(UIDexists($conn, $username, $email)!== false){
                header("location: ../signup.php?error=username in use");
                exit();
                }
                createUser($conn, $name, $email, $username, $pwd);
}
else {
    header("location: ../signup.php");
    exit();
}

