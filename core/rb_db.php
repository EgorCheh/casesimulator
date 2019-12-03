<?php

require 'rb-mysql.php';
 R::setup( 'mysql:host=127.0.0.1:3306;dbname=casesimulator',
        'root', '' );
session_start();

