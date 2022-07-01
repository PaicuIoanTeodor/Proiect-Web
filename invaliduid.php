<?php
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