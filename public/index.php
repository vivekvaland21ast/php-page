<?php

const BASE_PATH = __DIR__ . '/../';

// echo BASE_PATH . 'Core/functions.php';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    require base_path("Core/{$class}.php");
});
require base_path('Core/router.php');



