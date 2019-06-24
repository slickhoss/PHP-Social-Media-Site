<?php 

//function to write saved data to a txt
function writeCredentials ($tmp)
{
    $fp = fopen("accounts.txt", "a+");
    fwrite($fp, $tmp['firstName'] . '|' . $tmp['lastName'] . '|' . $tmp['dob'] . '|' . $tmp['phoneNumber'] . '|' . $tmp['password'] . PHP_EOL);
    fclose($fp);
}

function writePosts ($array)
{
    $fp = fopen("posts.txt", "a+");
    fwrite($fp, $array['title'] . '|' . $array['caption'] . '|' . $array['color'] . '|' . $array['image'] . '|' . $array['postedTime'] . PHP_EOL);
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

function checkName ($string)
{
    if(empty($string))
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

function checkPassword($array)
{
    $regexPattern0 = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])/';
    if(preg_match($regexPattern0, $array['password']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkCredentials ($userLogin, $userPassword)
{
    echo 'checkCredentials called' . "<BR>";
    if(file_exists('accounts.txt'))
    {
        $accounts = file('accounts.txt');
        foreach($accounts as $account)
        {
            $credentials = preg_split('/\|/', $account);
            echo $credentials[3] . '<br>';
            echo $credentials[4] . '<br>';
            if($credentials[3] == $userLogin && $credentials[4] == $userPassword)
            {
                echo 'login matches';
                return true;
            }
        }   
    }   
}


function getNames ($userLogin, $userPassword)
{
    if(file_exists('accounts.txt'))
    {
        $accounts = file('accounts.txt');
        foreach($accounts as $account)
        {
            $credentials = preg_split('/\|/', $account);
            echo $credentials[3] . '<br>';
            echo $credentials[4] . '<br>';
            if($credentials[3] == $userLogin && $credentials[4] == $userPassword)
            {
                return $credentials[0] . ' ' . $credentials[1];
            }
        }   
    }   
}

function checkPost($array)
{
    if(empty($array['title']) || empty($array['caption']) || empty($array['color']) || empty($array['image']) || empty($array['postedTime']))
    {
        return false;
    }
    else
    {
        return true;
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

function successMessage($param1)
{
    return "
            <div class='alert alert-success alert-dismissable text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                Thank You John Doe
            </div>
    ";
}

function populatePosts ()
{
    if(file_exists('posts.txt'))
    {
        return file('posts.txt');
    }
}

function datePeriod ($time)
{
    $day = 60 * 60 * 24;
    $week = 60 * 60 * 24 * 7;
    $twoWeeks = 60 * 60 * 24 * 14;
    $timePassed = time() - floatval($time);

    if($day - $timePassed >= 0)
    {
        return 'Recently';
    }
    else if($week - $timePassed >= 0)
    {
        return 'Within the week';
    }
    else if($twoWeeks - $timePassed >= 0)
    {
        return 'A while ago';
    }
}

function displayPost ($title, $caption, $author, $image, $postedTime)
{
    return "
            <div class='panel panel-info'>
                <div class='panel-heading'>
                    <span>
                        " . $title . "
                    </span>
                    <span class='pull-right text-muted'>
                        " . datePeriod($postedTime) . "
                    </span>
                </div>

                <div class='panel-body'>
                    <p class='text-muted'>
                        Posted On " . date("F d, Y h:i:s A", floatval($postedTime)) . "
                    </p>
                    <p>
                    " . $caption . "
                    </p>
                    <div class='image-box'>
                        <img class='img-thumbnail img-responsive' src='uploads/" . $image . "'>
                    </div>
                </div>

                <div class='panel-footer'>
                    <p>
                        Posted by : " . $author . "
                    </p>
                </div>
            </div>
    ";
}
?>