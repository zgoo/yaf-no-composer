<?php
define("APPLICATION_PATH", dirname(dirname(__FILE__)));

$app = new Yaf\Application(APPLICATION_PATH . "/conf/app.ini");
try {
    $app->bootstrap()->run();
} catch (exception $e) {
    exit('An error occurred.');
}