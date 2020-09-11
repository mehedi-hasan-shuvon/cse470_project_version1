<?php

//require mysql connection
require('database/DBController.php');

//require product class
require('database/Product.php');

//require Cart class
require('database/Cart.php');

//DBcontroller object
$db= new DBController();

//product object
$product= new Product($db);
$product_shuffle=$product->getData();

//cart object
$Cart= new Cart($db);



