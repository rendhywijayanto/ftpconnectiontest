<?php
$host = '118.97.80.20';
$password = 'sera12345#@';
$username = 'fmsuV1#';
try {
 $result = checkFtp($host, $username, $password);
} catch(Exception $e) {
 $result = $e->getMessage();
}
if($result) {
   print 'ok';
} else {
   print 'fail';
}
function checkFtp($host, $username, $password, $port = 21331, $timeout = 10) {
        $con = ftp_connect($host, $port, $timeout);
        if (false === $con) {
            throw new Exception('Unable to connect to FTP Server.');
        }
        $loggedIn = ftp_login($con,  $username,  $password);
        ftp_close($con);
        if (true === $loggedIn) {
           
            echo "Kambing";
        } else {
            throw new Exception(e);
        }
}

?>