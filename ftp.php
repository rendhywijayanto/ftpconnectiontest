<?php
$host = '118.97.80.20';
$password = 'sera12345#@';
$username = 'fmsuV1#';

$result = checkFtp($host, $username, $password);

print ($result);
function checkFtp($host, $username, $password, $port = 990 , $timeout = 10) {
        $con = ftp_connect($host, $port, $timeout);
        if (false === $con) {
            throw new Exception($e);
            return $e->getMessage();
        }
        $loggedIn = ftp_login($con,  $username,  $password);
        ftp_close($con);
        if (true === $loggedIn) {
            return true;
        } else {
            throw new Exception(e);
        }
}

?>