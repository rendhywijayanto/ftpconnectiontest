<?php
$host = '118.97.80.20';
$password = 'sera12345#@';
$username = 'fmsuV1#';
try {
 $result = checkFtp($host, $username, $password);
} catch(Exception $e) {
 $result = $e->getMessage();
}
print ($result);
function checkFtp($host, $username, $password, $port = , $timeout = 10) {
        $con = ftp_connect($host, $port, $timeout);
        if (false === $con) {
            throw new Exception('Unable to connect to FTP Server.');
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