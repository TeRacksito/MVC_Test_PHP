<?php

namespace Daw2\MvcTestPhp\Controllers;

use Philo\Blade\Blade;

abstract class Controller {
    public $blade;

    public function __construct() {
        $this->blade = new Blade(__DIR__ . '/../views', __DIR__ . '/../../cache');
    }
}