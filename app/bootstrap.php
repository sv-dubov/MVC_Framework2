<?php
// Load Config
require_once 'config/config.php';
// Autoload Core
spl_autoload_register(function ($className) {
    require_once 'core/' . $className . '.php';
});
