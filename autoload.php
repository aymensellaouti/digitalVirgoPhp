<?php

function load($className) {
   require $className.".php";
}

spl_autoload_register('load');