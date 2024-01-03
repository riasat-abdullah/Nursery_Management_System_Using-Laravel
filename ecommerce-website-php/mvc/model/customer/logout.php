<?php

session_start();

session_destroy();

echo "<script>window.open('http://localhost/ecommerce-website-php/mvc/controller/','_self')</script>";


?>