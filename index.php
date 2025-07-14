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