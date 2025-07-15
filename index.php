<?php

//Session Start:
session_start();

define('BASE_PATH', __DIR__);

//Helpers:
require_once BASE_PATH . '/app/Helpers.php';

//Configs:
require_once BASE_PATH . '/app/Configs.php';

//Display Errors:
displayError(DISPLAY_ERROR);

//Database Connection:
require_once BASE_PATH . '/database/DataBase.php';
require_once BASE_PATH . '/database/CreateDB.php';

//Create Database and Tables:
// $db = new database\CreateDB();
// $db->run();

//Routes:
require_once BASE_PATH . '/activities/Admin/Category.php';
require_once BASE_PATH . '/app/Routes.php';
echo "404 Not Found!";