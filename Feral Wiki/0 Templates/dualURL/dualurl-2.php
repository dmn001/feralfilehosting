<?php
# http://git.io/vfNg1
if ($_SERVER['HTTP_X_HOST'] != $_SERVER['HTTP_HOST']){  // HTTP_HOST is always the same format username.server.feralhosting.com
$GLOBALS['xproxy'] = '/' . getenv('USER');              // If the HOSTs don't match then insert this variable
} else {                                                // If they do match then do this instead
$GLOBALS['xproxy'] = '';                                // insert nothing. Basically, do nothing
}                                                       // close
?>