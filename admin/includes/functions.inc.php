<?php
function loggedin()
{
    if(isset($_SESSION['user']) && !empty($_SESSION['user']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function referrer()
{
    $http_referrer = $_SERVER['HTTP_REFERER'];
    return $http_referrer;
}
?>