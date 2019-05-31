<?php 
function writeCredentials ($tmp)
{
    //define filePointer
    $fp = fopen("accounts.txt", "a+");
    fwrite($fp, $tmp['firstName'] . '|' . $tmp['lastName'] . '|' . $tmp['dob'] . '|' . $tmp['phoneNumber'] . '|' . $tmp['password']);
    fclose($fp);
}

?>