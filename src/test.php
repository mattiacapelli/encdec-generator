<?php
require_once 'function.php';

function test() {
    $encdeckey = new encdeckey();
    $key = $encdeckey->generateKey("username");
    echo "Server Key -> " . $key["server"];
    echo "<BR>";
    echo "User Key -> " . $key["user"];
    echo "<BR>";
    echo "Full Key -> " . $key["full"];
    echo "<BR>";
}

test();

?>