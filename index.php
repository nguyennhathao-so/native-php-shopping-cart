<?php

/**
 * Native PHP Shopping Cart
 */

// Configuration Section
$_CONFIG = [

    // Application Name
    'name' => 'Shop Cart',

    // Application Base URL
    // 'baseurl' => 'http://localhost/shopping-cart',      // Standar Localhost
    // 'baseurl' => 'http://shopping-cart.test',           // Virtual Host (Laragon)
    'baseurl' => 'https://php-shop-hao.azurewebsites.net',   // LAN IP Address for Mobile Testing

    // Index Controller
    'index' => 'Home',

    // Database Configuration
    'database' => [
        'host'  => 'cloud.mysql.database.azure.com',
        'user'  => 'Admin_',
        'pass'  => 'Cloud123',
        'name'  => 'shop',
    ],

];

// Boot Core System
include 'system/boot.php';

?>
