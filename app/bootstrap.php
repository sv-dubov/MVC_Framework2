<?php
// Load Config
require_once 'config/config.php';
// Load URL Helper
require_once 'helpers/url_helper.php';
// Autoload Core
spl_autoload_register(function ($className) {
    require_once 'core/' . $className . '.php';
});
