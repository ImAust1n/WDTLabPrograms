<?php
    $day = 1;
    $x = 60 * 60 * 24 * $day;
    setcookie('testcookie', date('H:iA - m/d/y'), time() + $x);

    if (isset($_COOKIE['testcookie'])) {
        echo "Your last visit was on $_COOKIE[testcookie].";
    } else {
        echo "You got some stale COOKIES!";
    }
?>