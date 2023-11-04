<?php
session_start();
session_destroy();
header("Location: no1-login.html");
?>