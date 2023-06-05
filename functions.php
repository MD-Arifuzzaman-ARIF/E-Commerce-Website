<?php
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// Product object
$product = new Product($db);

$db = new DBcontroller();