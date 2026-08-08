<?php
session_start();
session_destroy();
header('Location: /Travel/admin/login.php');
exit;
