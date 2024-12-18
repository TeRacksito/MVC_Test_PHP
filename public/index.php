<?php

use Philo\Blade\Blade;

require "../vendor/autoload.php";

error_reporting(E_ALL ^ E_DEPRECATED);

$router = new AltoRouter();
$blade = new Blade(__DIR__ . '/../src/views', __DIR__ . '/../cache');

// map homepage
$router->map('GET', '/', function () use ($blade) {
    // require __DIR__ . '/../src/views/index.php';
    // echo 'Home page';
    echo $blade->view()->make('index')->render();
});

$router->map('GET', '/user', "UserController#index", "index");
// dynamic named route
$router->map('GET', '/user/[i:id]', "userController#show", 'user-details');

$match = $router->match();

if (is_array($match)) {
    if (is_callable($match['target'])) {    
        call_user_func_array($match['target'], $match['params']);
    } elseif (is_string($match['target'])) {
        list($controller, $action) = explode('#', $match['target']);
        $controller = 'Daw2\\MvcTestPhp\\Controllers\\' . $controller;
        call_user_func_array([new $controller(), $action], $match['params']);
    } else {
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        echo '404 Not Found - Not callable or string';
    }
} else {
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo '404 Not Found - Not array';
}

// echo URL to user-details page for ID 5
// echo $router->generate('user-details', ['id' => 5]); // Output: "/users/5"