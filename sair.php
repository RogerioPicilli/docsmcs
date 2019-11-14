<?php
session_start();
unset($_SESSION['ccUser']);
				header("Location: home");
				exit;
?>