<?php
session_start();
function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat)
{
    $result=true;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat) )
    {
$result = true;
    }
    else {
        $result=false;
    }
    return $result;
}
function invalidUID($username)  
{
    $result=true;
    //search parameter that throws and error when it doesnt match
    if(!preg_match('/^[a-zA-Z0-9]*$/', $username))
    {
$result = true;
    }
    else
    {
    
        $result=false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result=true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
$result = true;
    }
    else {
        $result=false;
    }
    return $result;
}
function pwdmatch($pwd, $pwdrepeat)
{
    $result=true;
    if($pwd!==$pwdrepeat )
    {
$result = true;
    }
    else {
        $result=false;
    }
    return $result;
}
function UIDexists($conn, $username, $email)
{
    $sql="SELECT * FROM users WHERE usersUID =? OR usersEmail = ?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=failed");
    exit();
}
//2 strings ss, check if there isnt an user
mysqli_stmt_bind_param($stmt, "ss",$username, $email);
mysqli_stmt_execute($stmt);
$resultdata=mysqli_stmt_get_result($stmt);
//return data from database if the user exists and login later
if($row = mysqli_fetch_assoc($resultdata)){
return $row;
}
else{
    $result=false;
    return $result;
}
mysqli_stmt_close($stmt);
}
//signup the user
function createUser($conn, $name, $email, $username, $pwd)
{
    //placeholder, prepared statements
    $sql="INSERT INTO users (usersName, usersEmail, usersUID, usersPWD) VALUES (?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn); //prepared statement
if (!mysqli_stmt_prepare($stmt,$sql)){   
    header("location: ../signup.php?error=failed");
    exit();
}
$hashedPWD = password_hash($pwd, PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, "ssss",$name, $email, $username, $hashedPWD);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location:../signup.php?error=none");
exit();
}

function emptyInputLogin($username, $pwd)
{
    $result=true;
    if(empty($username) || empty($pwd))
    {
$result = true;
    }
    else {
        $result=false;
    }
    return $result;
}
//username or email
function loginUser($conn, $username, $pwd)
{
    $UIDexists= UIDexists($conn, $username, $username);
    if($UIDexists === false)
    {
        header("location:../login.php?error=wrong login");
        exit();
    }
    $pwdHashed=$UIDexists["usersPWD"];
    $checkPWD=password_verify($pwd, $pwdHashed);

    if($UIDexists === false) 
    {
    header("location:../login.php?error=wrong login");
    exit();
    }
 if ($checkPWD === true)
{
    session_start();
    $_session["userid"]= $UIDexists["usersID"];
    $_session["useruid"]= $UIDexists["usersUID"];
    header("location:../index.php");
exit();
}

}