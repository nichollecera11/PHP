<?php
session_start();
session_unset();
session_destroy();

require_once('./../inc/functions.php');

redirect('/3.2/login.php');
die();