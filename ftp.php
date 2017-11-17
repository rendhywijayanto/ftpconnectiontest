<?php
$host= 'ftp.example.com';
$user = 'notarealusername';
$password = 'notarealpassword';
$ftpConn = ftp_connect($host);
$login = ftp_login($ftpConn,$user,$password);
// check connection
if ((!$ftpConn) || (!$login)) {
 echo 'FTP connection has failed! Attempted to connect to '. $host. ' for user '.$user.'.';
}else{
 echo 'FTP connection was a success.';
 $directory = ftp_nlist($ftpConn,'');
 echo '<pre>'.print_r($directory,true).'</pre>';
}
ftp_close($ftpConn);
?>