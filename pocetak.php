<?php

$auth_realm = 'Hotel Opatija - Admin Login';

require_once 'auth.php';

echo "Logirani ste kao {$_SESSION['username']}<br>";
echo '<p><a href="?action=logOut">Odlogirajte se</a></p>';

?>