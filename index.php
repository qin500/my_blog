<?php

$start = microtime(true);

error_reporting(E_ALL);
ini_set('display_errors', true);

include 'lib/db.php';
include 'lib/fun.php';
include 'lib/Router.php';

$db = new Database();
//$fun=new Fun();

//$config = $db->select('sys_options');
//$k = array_column($config, 'key');
//$v = array_column($config, 'val');
//$config = array_combine($k, $v);




function dd($a)
{
    echo "line: " . debug_backtrace()[0]["line"] . "<br>" ;
    if (gettype($a) == "string" || gettype($a) == "integer") {
        echo $a . "<br>";
    } else if (gettype($a) == "array") {
        echo '<pre>' . print_r($a, true) . "</pre><br>";
    } else {
        var_dump($a);
        echo  "<br>";
    }
}



$router = new Router();

$router->add('/', function () {
    echo 'Home page';
});
$router->add('/about', function () {
    echo 'About page';
});
$router->add('/403', function () {
    echo '403 Protected Pages';
});
$router->add('/404', function () {
    echo '这是404页面';
});

$router->add('/post/{id}/name/{name}', function ($id, $name) {
    echo "Post $id";
    echo "Post $name";
    dd($_GET);
});

$router->dispatch();

// /about  -> About page
// /post/100 -> Post 100
// /contact -> 404 Page not found!

//require 'template/header.php';
//require "template/index.php";
//require 'template/footer.php';






