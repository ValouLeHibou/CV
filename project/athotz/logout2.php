<?php
session_start();
unset($_SESSION["user2"]);
header("location:login2.php");
