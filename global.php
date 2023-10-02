<?php
$name = "sellaouti";

function test ($x, ...$args) {
    var_dump($args);
    var_dump($GLOBALS);
}

test(1, 2, 3);