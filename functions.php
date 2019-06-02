<?php 

//function to write saved data to a txt
function writeCredentials ($tmp)
{
    $fp = fopen("accounts.txt", "a+");
    fwrite($fp, $tmp['firstName'] . '|' . $tmp['lastName'] . '|' . $tmp['dob'] . '|' . $tmp['phoneNumber'] . '|' . $tmp['password'] . "\n");
    fclose($fp);
}

//function to check all inputs were provided    
function checkInputStrings($array)
{
    if(empty($array['firstName']) || empty($array['lastName']) || empty($array['phoneNumber']) || empty($array['dob']) || empty($array['password']))
    {
        return false;
    }
    else
    {
        return true;
    }
}

function checkDateFormat($array)
{
    $regexPattern0 = '/^[0-9]{2}-[0-9]{2}-[0-9]{4}/';
    if(preg_match($regexPattern0, $array['dob']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkPhoneNumberFormat($array)
{
    $regexPattern0 = '/^[0-9]{10}/';
    if(preg_match($regexPattern0, $array['phoneNumber']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

//function to display errorMessage in an element
function errorMessage ($param1)
{
    if(!empty($param1))
    {
        return "
            <div class='alert alert-warning alert-dismissable text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$param1."
            </div>
        ";
    }
}

?>