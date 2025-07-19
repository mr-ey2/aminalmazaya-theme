<?php

//Session Start:
session_start();

//Defines:
define('BASE_PATH', __DIR__);

//Configs & Helpers:
require_once BASE_PATH . '/app/Configs-Helpers.php';

//Display Errors:
displayError(DISPLAY_ERROR);

//Database Connection:
require_once BASE_PATH . '/database/DataBase.php';
require_once BASE_PATH . '/database/CreateDB.php';

//Create Database and Tables:
// $db = new database\CreateDB();
// $db->run();

//Routes:
require_once BASE_PATH . '/activities/Admin/Admin.php';
require_once BASE_PATH . '/activities/Admin/Category.php';
require_once BASE_PATH . '/activities/Admin/Post.php';
require_once BASE_PATH . '/activities/Admin/Banner.php';
require_once BASE_PATH . '/activities/Admin/User.php';
require_once BASE_PATH . '/app/Routes.php';
