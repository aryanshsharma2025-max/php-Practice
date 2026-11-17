<?php 
    setcookie("username", "Aryansh Sharma", time() + 3600);
    if
(isset($_COOKIE["username"])) {
        echo "Welcome " . $_COOKIE["username"] . "!<br>";
    } else {
        echo "Welcome Aryansh Sharma!<br>";
    }
?>